/*! responsible.js v1.0.0 | (c) 2015 @davidwells | https://github.com/davidwells/responsible */
/**
 * Responsible JS SRC
 */

(function(root, factory) {
    if (typeof define === 'function' && define.amd) {
        define(factory);
    } else if (typeof exports === 'object') {
        module.exports = factory;
    } else {
        root.responsible = factory();
    }
})(this, function() {

    // Cross-browser event listening
    addListener = function(element, eventName, listener) {
        if (!element) {
            return;
        }

        if (element.addEventListener) {
            element.addEventListener(eventName, listener, false);
        } else if (element.attachEvent) {
            element.attachEvent("on" + eventName, listener);
        } else {
            element['on' + eventName] = listener;
        }
    };

    removeListener = function(element, eventName, listener) {
        if (!element) {
            return;
        }

        if (element.removeEventListener) {
            element.removeEventListener(eventName, listener, false);
        } else if (element.detachEvent) {
            element.detachEvent("on" + eventName, listener);
        } else {
            element["on" + eventName] = null;
        }
    };

    _logStr = function(string) {
        if (window.console) { // IE...
            window.console.log("Responsible: " + string);
        }
    };

    _argsOrDefault = function(args, key) {
        if (typeof args[key] !== 'undefined') {
            return args[key];
        } else {
            return Defaults[key];
        }
    };

    extend = function(defaults, options) {
        var extended = {};
        var prop;
        for (prop in defaults) {
            if (Object.prototype.hasOwnProperty.call(defaults, prop)) {
                extended[prop] = defaults[prop];
            }
        }
        for (prop in options) {
            if (Object.prototype.hasOwnProperty.call(options, prop)) {
                extended[prop] = options[prop];
            }
        }
        return extended;
    };

    // Create cookie
    _createCookie = function(name, value, days, custom_time) {
        var expires = "";
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toGMTString();
        }
        if (custom_time) {
            expires = "; expires=" + days.toGMTString();
        }
        document.cookie = name + "=" + value + expires + "; path=/";
    };
    // Read cookie
    _readCookie = function(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) === ' ') {
                c = c.substring(1, c.length);
            }
            if (c.indexOf(nameEQ) === 0) {
                return c.substring(nameEQ.length, c.length);
            }
        }
        return null;
    };
    _getWidth = function() {
        // get viewport width of browser
        var elem = (document.compatMode === "CSS1Compat") ?
            document.documentElement :
            document.body;

        return elem.clientWidth;
    };
    _getViewPort = function() {
        var viewport = document.querySelector("meta[name=viewport]");
        if (viewport) {
            return viewport;
        } else {
            // insert viewport
            viewport = document.createElement('meta');
            viewport.name = "viewport";
            viewport.content = "width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0";
            document.getElementsByTagName('head')[0].appendChild(viewport);
            return viewport;
        }
    };
    // File Operations
    _loadCSS = function(path) {
        var isLoaded = document.getElementById('responsible-css');
        if (isLoaded) {
            return false;
        }

        var cssRef = document.createElement("link");
        cssRef.id = "responsible-css";
        cssRef.setAttribute("rel", "stylesheet");
        cssRef.setAttribute("type", "text/css");
        cssRef.setAttribute("href", path);

        document.getElementsByTagName("head")[0].appendChild(cssRef);
    };
    // might be able to just disable stylesheet
    _removeCSS = function(filename) {
        filename = filename || Defaults.cssPath;
        console.log('filename', filename);
        var cssFiles = document.getElementsByTagName('link');
        // search backwards within nodelist for matching cssFiles to remove
        for (var i = cssFiles.length; i >= 0; i--) {
            console.log(cssFiles[i]);
            if (cssFiles[i] && cssFiles[i].getAttribute("href") !== null && cssFiles[i].getAttribute("href").indexOf(filename) !== -1) {
                console.log('match on ', filename);
                // set path cache
                cache = cssFiles[i].getAttribute("href");
                cssFiles[i].parentNode.removeChild(cssFiles[i]);
            }

        }
    };
    noOp = function(){};

    var responsible = {},
        viewport = _getViewPort(), // returns cached viewport tag
        Defaults = {
            cssPath: 'css/responsive.css', // path to responsive css file containing media queries
            desktopWidth: 1280, // the desired width of the mobile desktop view
            toggleThreshold: 980, // if the window is smaller than width, the mobile toggle will display
            desktopToggleDisplay: true, // set to false to hide mobile toggle
            desktopToggleText: "Toggle Mobile Site",
            desktopCallback: noOp, // trigger callback after desktop view toggled
            mobileToggleDisplay: true, // set to false to hide mobile toggle
            mobileToggleText: "View Full Site",
            mobileToggleAlign: 'right', // right or left
            mobileToggleBottom: '0px', // offset from bottom
            mobileCallback: noOp  // trigger callback after mobile view toggled
        },
        State, // Current State of view. "mobile" or "desktop"
        cache;


    _desktopAddToggle = function() {
        var toggle = document.getElementById('responsible-toggle');
        if (toggle || !Options.desktopToggleDisplay) {
            return false;
        }

        var firstElement = document.body.children[0],
            div = document.createElement("div");
        div.id = "responsible-toggle";
        div.style.padding = "40px 0px 40px";
        div.style.width = "100%";
        div.style.color = "#eaeaea";
        div.style.fontSize = "60px";
        div.style.fontWeight = "bold";
        div.style.backgroundColor = "#444";
        div.style.textAlign = "center";
        div.style.cursor = "pointer";
        div.innerText = Options.desktopToggleText;
        // insert at top of page
        document.body.insertBefore(div, firstElement);
        addListener(div, 'click', responsible.mobile);
    };

    _desktopRemoveToggle = function() {
        var toggle = document.getElementById('responsible-toggle');

        if (toggle) {
            console.log('Destroy desktop toggle');
            removeListener(toggle, 'click', responsible.mobile);
            document.body.removeChild(toggle);
        }
    };

    _mobileAddToggle = function() {
        var toggle = document.getElementById('responsible-mobile-toggle');
        if (toggle || !Options.mobileToggleDisplay) {
            return false;
        }

        var firstElement = document.body.children[0],
            div = document.createElement("div");
        div.id = "responsible-mobile-toggle";
        div.style.position = "fixed";
        div.style.padding = "10px";
        div.style.color = "#eaeaea";
        div.style.fontSize = "14px";
        //div.style.fontWeight = "bold";
        div.style.backgroundColor = "#444";
        div.style.width = "100%";
        div.style.opacity = "0.9";
        div.style.textAlign = "center";
        div.style[Options.mobileToggleAlign] = "0px";
        div.style.bottom = Options.mobileToggleBottom;
        div.style.zIndex = "99999999";
        div.innerText = Options.mobileToggleText;
        // insert at top of page
        document.body.insertBefore(div, firstElement);
        addListener(div, 'click', responsible.desktop);
    };

    _mobileRemoveToggle = function() {
        var toggle = document.getElementById('responsible-mobile-toggle');

        if (toggle) {
            console.log('Destroy mobile toggle');
            removeListener(toggle, 'click', responsible.desktop);
            document.body.removeChild(toggle);
        }
    };

    responsible.init = function(Settings) {
        // Handle settings here
        Settings = Settings || {};
        // Set global Options
        Options = extend(Defaults, Settings);

        if (_getWidth() < Options.toggleThreshold) {
            // Mobile view
            State = "mobile";
            _mobileAddToggle();
            OnDesktop = false;
        } else {
            // Desktop view, do nothing
            State = "desktop";
            OnDesktop = true;

        }
    };

    responsible.desktop = function() {
        if (State === "desktop") {
            _logStr('Desktop mode already active');
            return false;
        }

        State = "desktop"; // set state

        _removeCSS(Options.cssPath);
        viewport.setAttribute("content",
            'width=' + Options.desktopWidth + ", user-scalable=yes, initial-scale=.25, maximum-scale=.35");

        _mobileRemoveToggle();
        _desktopAddToggle();

        setTimeout(function() {
            // make it zoomable
            viewport.setAttribute("content",
                'width=' + Options.desktopWidth + ", user-scalable=yes, initial-scale=.25, maximum-scale=1");
            // run desktop callback
            if (Options.desktopCallback && typeof (Options.desktopCallback) === 'function') {
                Options.desktopCallback();
            }
        }, 300);

    };

    responsible.mobile = function() {
        if (State === "mobile") {
            _logStr('Mobile state already active');
            return false;
        }
        if (OnDesktop) {
            _logStr('You are on a desktop. Resize your browser');
            return false;
        }
        // set state
        State = "mobile";
        var cssPath = (cache) ? cache : Options.cssPath;

        //console.log('cached cssPathhere ', cache);
        //console.log('customizations', Options);

        // Load responsive CSS
        _loadCSS(cssPath);

        _desktopRemoveToggle();
        _mobileAddToggle();
        // Set viewport back to mobile
        viewport.setAttribute('content', 'width=device-width, user-scalable=yes, initial-scale=1');
        // run mobile callback
        if (Options.mobileCallback && typeof (Options.mobileCallback) === 'function') {
            Options.mobileCallback();
        }
    };

    return responsible;

});
/* run this on your page
responsible.init();
*/