function trace(e, i) {
    UniteAdminRev.trace(e, i)
}

function debug(e) {
    UniteAdminRev.debug(e)
}
var UniteAdminRev = new function() {
    var e = this,
        i = null,
        o = null,
        t = null,
        r = null,
        u = [],
        d = null,
        n = null,
        a = null,
        l = !1;
    e.showInfo = function(e) {
        var i = '<i class="eg-icon-info"></i>';
        "warning" == e.type && (i = '<i class="eg-icon-cancel"></i>'), "success" == e.type && (i = '<i class="eg-icon-ok"></i>'), e.showdelay = void 0 != e.showdelay ? e.showdelay : 0, e.hidedelay = void 0 != e.hidedelay ? e.hidedelay : 0, 0 == jQuery("#eg-toolbox-wrapper").length && jQuery("#viewWrapper").append('<div id="eg-toolbox-wrapper"></div>'), jQuery("#eg-toolbox-wrapper").append('<div class="eg-toolbox newadded">' + i + e.content + "</div>");
        var o = jQuery("#eg-toolbox-wrapper").find(".eg-toolbox.newadded");
        o.removeClass("newadded"), punchgs.TweenLite.fromTo(o, .5, {
            y: -50,
            autoAlpha: 0,
            transformOrigin: "50% 50%",
            transformPerspective: 900,
            rotationX: -90
        }, {
            autoAlpha: 1,
            y: 0,
            rotationX: 0,
            ease: punchgs.Back.easeOut,
            delay: e.showdelay
        }), "event" != e.hideon ? (o.click(function() {
            punchgs.TweenLite.to(o, .3, {
                x: 200,
                ease: punchgs.Power3.easeInOut,
                autoAlpha: 0,
                onComplete: function() {
                    o.remove()
                }
            })
        }), 0 != e.hidedelay && "click" != e.hideon && punchgs.TweenLite.to(o, .3, {
            x: 200,
            ease: punchgs.Power3.easeInOut,
            autoAlpha: 0,
            delay: e.hidedelay + e.showdelay,
            onComplete: function() {
                o.remove()
            }
        })) : jQuery("#eg-toolbox-wrapper").on(e.event, function() {
            punchgs.TweenLite.to(o, .3, {
                x: 200,
                ease: punchgs.Power3.easeInOut,
                autoAlpha: 0,
                onComplete: function() {
                    o.remove()
                }
            })
        })
    }, e.htmlspecialchars = function(e) {
        return e.replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;").replace(/"/g, "&quot;").replace(/'/g, "&#039;")
    }, e.getAbsolutePos = function(e) {
        var i = curtop = 0;
        if (e.offsetParent)
            for (i = e.offsetLeft, curtop = e.offsetTop; e = e.offsetParent;) i += e.offsetLeft, curtop += e.offsetTop;
        return [i, curtop]
    }, e.stripslashes = function(e) {
        return (e + "").replace(/\\(.?)/g, function(e, i) {
            switch (i) {
                case "\\":
                    return "\\";
                case "0":
                    return "\0";
                case "":
                    return "";
                default:
                    return i
            }
        })
    }, e.strToBool = function(e) {
        return void 0 != e && "string" == typeof e && "true" == e.toLowerCase()
    }, e.setColorPickerCallback = function(e) {
        a = e
    }, e.onColorPickerMoveEvent = function(e) {
        "function" == typeof a && a(e)
    }, e.stripTags = function(e, i) {
        i = (((i || "") + "").toLowerCase().match(/<[a-z][a-z0-9]*>/g) || []).join("");
        return e.replace(/<!--[\s\S]*?-->|<\?(?:php)?[\s\S]*?\?>/gi, "").replace(/<\/?([a-z][a-z0-9]*)\b[^>]*>/gi, function(e, o) {
            return i.indexOf("<" + o.toLowerCase() + ">") > -1 ? e : ""
        })
    }, e.rgb2hex = function(e) {
        function i(e) {
            return ("0" + parseInt(e).toString(16)).slice(-2)
        }
        if (-1 == e.search("rgb") || "" == jQuery.trim(e)) return e;
        if (e.indexOf("-moz") > -1 && (delete(u = e.split(" "))[0], e = jQuery.trim(u.join(" "))), e.split(")").length > 2) {
            for (var o = "", t = e.split(")"), r = 0; r < t.length - 1; r++) t[r] += ")", 4 == (u = t[r].split(",")).length ? (e = u[0] + "," + u[1] + "," + u[2], e += ")") : e = t[r], o += "#" + i((e = (e = jQuery.trim(e)).match(/^rgba?\((\d+),\s*(\d+),\s*(\d+)(?:,\s*(\d+))?\)$/))[1]) + i(e[2]) + i(e[3]) + " ";
            return o
        }
        var u = e.split(",");
        return 4 == u.length && (e = u[0] + "," + u[1] + "," + u[2], e += ")"), "#" + i((e = e.match(/^rgba?\((\d+),\s*(\d+),\s*(\d+)(?:,\s*(\d+))?\)$/))[1]) + i(e[2]) + i(e[3])
    }, e.getTransparencyFromRgba = function(e, i) {
        var o = e.split(",");
        return 4 == o.length && ((i = void 0 === i || i) ? o[3].replace(/[^\d.]/g, "") : 100 * o[3].replace(/[^\d.]/g, ""))
    }, e.debug = function(e) {
        jQuery("#div_debug").show().html(e)
    }, e.trace = function(e, i) {
        i && 1 == i && console.clear(), console.log(e)
    }, e.showErrorMessage = function(i) {
        e.showInfo({
            content: i,
            type: "warning",
            showdelay: 0,
            hidedelay: 3,
            hideon: "",
            event: ""
        }), _()
    };
    e.setErrorMessageID = function(e) {
        i = e
    }, e.setSuccessMessageID = function(e) {
        o = e
    };
    this.hideSuccessMessage = function() {
        o ? (jQuery("#" + o).hide(), o = null) : jQuery("#success_message").slideUp("slow").fadeOut("slow"), _()
    }, this.setAjaxLoaderID = function(e) {
        t = e
    };
    var s = function() {
        t && (jQuery("#" + t).hide(), t = null)
    };
    this.setAjaxHideButtonID = function(e) {
        r = e
    };
    var _ = function() {
        if (r) {
            var e = r.split(",");
            if (e.length > 1)
                for (var i = 0; i < e.length; i++) jQuery("#" + e[i]).show();
            else jQuery("#" + r).show();
            r = null
        }
    };
    e.ajaxRequest = function(o, u, d, n, a) {
        var l = {
            action: g_uniteDirPlugin + "_ajax_action",
            client_action: o,
            nonce: g_revNonce,
            data: u
        };
        null !== i ? (jQuery("#" + i).hide(), i = null) : jQuery("#error_message").hide(), t && jQuery("#" + t).show(),
            function() {
                if (r) {
                    var e = r.split(",");
                    if (e.length > 1)
                        for (var i = 0; i < e.length; i++) jQuery("#" + e[i]).hide();
                    else jQuery("#" + r).hide()
                }
            }(), void 0 === n && showWaitAMinute({
                fadeIn: 300,
                text: rev_lang.please_wait_a_moment
            }), jQuery.ajax({
                type: "post",
                url: ajaxurl,
                dataType: "json",
                data: l,
                success: function(i) {
                    if (void 0 !== n || i.is_redirect || showWaitAMinute({
                            fadeOut: 300
                        }), s(), !i) return e.showErrorMessage("Empty ajax response!"), !1;
                    if (-1 == i) return e.showErrorMessage("ajax error!!!"), !1;
                    if (0 == i) return e.showErrorMessage("ajax error, action: <b>" + o + "</b> not found"), !1;
                    if (void 0 == i.success) return e.showErrorMessage("The 'success' param is a must!"), !1;
                    if (0 == i.success) {
                        if (void 0 === a) return e.showErrorMessage(i.message), !1;
                        "function" == typeof d && d(i)
                    } else "function" == typeof d && d(i), i.message && (t = i.message, e.showInfo({
                        content: t,
                        type: "success",
                        showdelay: 0,
                        hidedelay: 1,
                        hideon: "",
                        event: ""
                    }), _()), i.is_redirect && (location.href = i.redirect_url);
                    var t
                },
                error: function(i, o, t) {
                    void 0 === n && showWaitAMinute({
                        fadeOut: 300
                    }), s(), "parsererror" == o && e.debug(i.responseText), e.showErrorMessage("Ajax Error!!! " + o)
                }
            })
    };
    var c = function(e, i, o) {
        var t = uploadurl + "&TB_iframe=true&height=450&width=960";
        tb_show(e, t), window.getImg = function() {
            void 0 !== iframe_img && i(iframe_img), tb_remove()
        }
    };
    e.openAddImageDialog = function(e, i, o) {
        c(e, i)
    }, e.openAddVideoDialog = function(e, i, o) {
        c(e, i)
    }, e.loadCssFile = function(e, i) {
        e += "?rand=" + Math.floor(1e5 * Math.random() + 1), i && jQuery("#" + i).remove(), jQuery("head").append("<link>");
        var o = jQuery("head").children(":last");
        o.attr({
            rel: "stylesheet",
            type: "text/css",
            href: e
        }), i && o.attr({
            id: i
        })
    }, e.getUrlShowImage = function(e, i, o, t) {
        e = parseInt(e, 0);
        var r = g_urlAjaxShowImage + "&img=" + e;
        return i && (r += "&w=" + i), o && (r += "&h=" + o), t && 1 == t && (r += "&t=exact"), r
    };
    var v = function(e) {
        if (!e) return jQuery("#video_content").html(""), !1;
        var i = e.thumb_medium,
            o = '<div class="video-thumbnail-all-wrapper">';
        o += '<div class="video-thumbnail-preview-wrapper"><div id="video-thumbnail-preview" style="background-size:cover; background-position:center center; background-image:url(' + ("" != jQuery.trim(jQuery("#input_video_preview").val()) ? jQuery("#input_video_preview").val() : i.url) + "); width:" + i.width + "px; height:" + i.height + 'px;display:inline-block;vertical-align:bottom"></div></div>', o += '<div class="video-content-description">', o += '<div class="video-content-title">' + e.title + "</div>", void 0 !== e.desc_small && (o += e.desc_small), o += "</div>", o += "</div>", jQuery("#video_content").html(o)
    };
    e.onYoutubeCallback = function(e) {
        jQuery("#youtube_loader").hide();
        var i = {};
        i.id = jQuery("#youtube_id").val(), i.id = jQuery.trim(i.id), i.video_type = "youtube", e[0].width <= 170 || e[0].height <= 140 ? i.title = "YouTube: " + rev_lang.maybe_wrong_yt_id : i.title = "YouTube", i.author = "YouTube", i.link = "", i.description = "", i.desc_small = "", i.description.length > 200 && (i.desc_small = i.description.slice(0, 200) + "..."), i.thumb_small = {
            url: e[0].src,
            width: 200,
            height: 150
        }, i.thumb_medium = {
            url: e[0].src,
            width: 320,
            height: 240
        }, i.thumb_big = {
            url: e[0].src,
            width: e[0].width,
            height: e[0].height
        }, i.thumb_very_big = {
            url: e[0].src.replace("sddefault.jpg", "maxresdefault.jpg"),
            width: e[0].width,
            height: e[0].height
        }, i.video_width = e[0].width, i.video_height = e[0].height, v(i);
        var o = jQuery("#input_video_arguments");
        "" == o.val() && o.val(o.data("youtube")), d = i, jQuery("#video_dialog_tabs").removeClass("disabled"), l = !0, jQuery("#button-video-add").show()
    }, e.initVideoDef = function() {
        jQuery(".button-image-select-video-default").click(function() {
            if (void 0 === d) return !1;
            switch (d.video_type) {
                case "vimeo":
                    jQuery("#input_video_preview").val(d.thumb_medium.url), jQuery("#video-thumbnail-preview").css({
                        backgroundImage: "url(" + d.thumb_medium.url + ")"
                    });
                    break;
                case "youtube":
                    jQuery("#input_video_preview").val(d.thumb_big.url), jQuery("#video-thumbnail-preview").css({
                        backgroundImage: "url(" + d.thumb_big.url + ")"
                    })
            }
        }), jQuery(".button-image-select-video-max").click(function() {
            if (void 0 === d) return !1;
            switch (d.video_type) {
                case "vimeo":
                    jQuery("#input_video_preview").val(d.thumb_large.url), jQuery("#video-thumbnail-preview").css({
                        backgroundImage: "url(" + d.thumb_large.url + ")"
                    });
                    break;
                case "youtube":
                    jQuery("#input_video_preview").val(d.thumb_very_big.url), jQuery("#video-thumbnail-preview").css({
                        backgroundImage: "url(" + d.thumb_very_big.url + ")"
                    })
            }
        })
    }, e.onVimeoCallback = function(e) {
        jQuery("#vimeo_loader").hide(), e = e[0];
        var i = {
            video_type: "vimeo"
        };
        i.id = e.id, i.id = jQuery.trim(i.id), i.title = e.title, i.link = e.url, i.author = e.user_name, i.description = e.description, i.description.length > 200 && (i.desc_small = i.description.slice(0, 200) + "..."), i.thumb_large = {
            url: e.thumbnail_large,
            width: 640,
            height: 360
        }, i.thumb_medium = {
            url: e.thumbnail_medium,
            width: 200,
            height: 150
        }, i.thumb_small = {
            url: e.thumbnail_small,
            width: 100,
            height: 75
        }, i.video_with = 640, i.video_height = 360, v(i);
        var o = jQuery("#input_video_arguments");
        "" == o.val() && o.val(o.data("vimeo")), d = i, jQuery("#video_dialog_tabs").removeClass("disabled"), l = !0, jQuery("#button-video-add").show()
    }, e.videoDialogOnError = function() {
        if (1 == l) return jQuery("#video_radio_audio").is(":checked") ? jQuery("#button-audio-add").show() : jQuery("#button-video-add").show(), l = !1, !1;
        jQuery("#button-video-add").hide(), jQuery("#button-audio-add").hide(), jQuery("#youtube_loader").hide(), jQuery("#vimeo_loader").hide();
        var e = "<div class='video-content-error'>" + rev_lang.video_not_found + "</div>";
        jQuery("#video_content").html(e)
    };
    var p = function() {
        1 == jQuery("#input_video_fullwidth").is(":checked") ? jQuery("#video_full_screen_settings").show() : (jQuery("#input_video_cover").prop("checked", !1), jQuery("#video_full_screen_settings").hide()), 1 == jQuery("#input_video_cover").is(":checked") ? jQuery("#input_video_ratio_lbl, #input_video_ratio, #input_video_dotted_overlay_lbl, #input_video_dotted_overlay").show() : jQuery("#input_video_ratio_lbl, #input_video_ratio, #input_video_dotted_overlay_lbl, #input_video_dotted_overlay").hide(), RevSliderSettings.onoffStatus(jQuery("#input_video_fullwidth")), RevSliderSettings.onoffStatus(jQuery("#input_video_cover"))
    };
    e.openVideoDialog = function(e, i, o) {
        n = e;
        var t = jQuery("#dialog_video"),
            r = {
                Close: function() {
                    t.dialog("close")
                }
            };
        "audio" == o ? function(e) {
            if (jQuery("#button-audio-add").text(jQuery("#button-audio-add").data("textadd")), jQuery("#video_radio_audio").attr("checked", !0), jQuery("#video_type_chooser").hide(), jQuery("#video_block_youtube").hide(), jQuery("#video_block_vimeo").hide(), jQuery("#video_block_html5").hide(), jQuery("#video_block_audio").show(), jQuery(".rs-hide-on-audio").hide(), jQuery(".rs-show-on-audio").show(), !e) return jQuery("#video_content").html(""), !1;
            var i = e.thumb_medium,
                o = '<div class="video-thumbnail-all-wrapper">';
            o += '<div class="video-thumbnail-preview-wrapper"><div id="video-thumbnail-preview" style="background-size:cover; background-position:center center; background-image:url(' + ("" != jQuery.trim(jQuery("#input_video_preview").val()) ? jQuery("#input_video_preview").val() : i.url) + "); width:" + i.width + "px; height:" + i.height + 'px;display:inline-block;vertical-align:bottom"></div></div>', o += '<div class="video-content-description">', o += '<div class="video-content-title">' + e.title + "</div>", void 0 !== e.desc_small && (o += e.desc_small), o += "</div>", o += "</div>", jQuery("#video_content").html(o)
        }(!1) : (v(!1), jQuery("#video_block_youtube").show(), jQuery("#video_block_audio").hide(), jQuery("#video_radio_youtube").attr("checked", !0), jQuery(".rs-hide-on-audio").show(), jQuery(".rs-show-on-audio").hide(), jQuery("#video_type_chooser").show()), jQuery("#youtube_id,#vimeo_id").prop("disabled", "").removeClass("input-disabled"), jQuery("#html5_url_poster").val(""), jQuery("#html5_url_mp4").val(""), jQuery("#html5_url_webm").val(""), jQuery("#html5_url_ogv").val(""), jQuery("#html5_url_audio").val(""), jQuery("#input_video_arguments").val(""), jQuery("#select_video_autoplay option[value='false']").attr("selected", !0), jQuery("#input_video_nextslide").prop("checked", ""), jQuery("#input_video_force_rewind").prop("checked", ""), jQuery("#input_video_fullwidth").prop("checked", ""), jQuery("#input_video_control").prop("checked", ""), jQuery("#input_video_mute").prop("checked", ""), jQuery("#input_disable_on_mobile").prop("checked", ""), jQuery("#input_video_show_cover_pause").prop("checked", ""), jQuery("#input_video_large_controls").prop("checked", !0), jQuery("#input_video_leave_fs_on_pause").prop("checked", !0), jQuery("#input_video_cover").prop("checked", ""), jQuery("#input_video_stopallvideo").prop("checked", ""), jQuery("#input_video_allowfullscreen").prop("checked", ""), jQuery("#input_video_dotted_overlay option[value='none']").attr("selected", !0), jQuery("#input_video_ratio option[value='16:9']").attr("selected", !0), jQuery('#input_video_preload option[value="auto"]').attr("selected", !0), jQuery('#input_video_preload_wait option[value="5"]').attr("selected", !0), jQuery('#input_video_speed option[value="1"]').attr("selected", !0), jQuery('#input_video_loop option[value="none"]').attr("selected", !0), jQuery("#input_video_preview").val(""), jQuery("#input_use_poster_on_mobile").prop("checked", ""), jQuery("#input_video_show_visibility").prop("checked", ""), jQuery("#input_video_play_inline").prop("checked", ""), jQuery("#input_video_start_at").val(""), jQuery("#input_video_end_at").val(""), jQuery("#input_video_volume").val("100"), RevSliderSettings.onoffStatus(jQuery("#input_video_nextslide")), RevSliderSettings.onoffStatus(jQuery("#input_video_force_rewind")), RevSliderSettings.onoffStatus(jQuery("#input_video_fullwidth")), RevSliderSettings.onoffStatus(jQuery("#input_video_control")), RevSliderSettings.onoffStatus(jQuery("#input_video_mute")), RevSliderSettings.onoffStatus(jQuery("#input_disable_on_mobile")), RevSliderSettings.onoffStatus(jQuery("#input_video_cover")), RevSliderSettings.onoffStatus(jQuery("#input_video_stopallvideo")), RevSliderSettings.onoffStatus(jQuery("#input_video_allowfullscreen")), RevSliderSettings.onoffStatus(jQuery("#input_use_poster_on_mobile")), RevSliderSettings.onoffStatus(jQuery("#input_video_show_cover_pause")), RevSliderSettings.onoffStatus(jQuery("#input_video_large_controls")), RevSliderSettings.onoffStatus(jQuery("#input_video_leave_fs_on_pause")), RevSliderSettings.onoffStatus(jQuery("#input_video_show_visibility")), RevSliderSettings.onoffStatus(jQuery("#input_video_play_inline")), jQuery("#button-video-add").hide(), jQuery("#button-audio-add").hide(), jQuery("#video_dialog_tabs").hasClass("disabled") || jQuery("#video_dialog_tabs").addClass("disabled"), jQuery("#youtube_id").val(""), jQuery("#vimeo_id").val(""), jQuery("#fullscreenvideofun").hide();
        var u = jQuery("#button-video-add");
        u.text(u.data("textadd"));
        var d = jQuery("#button-audio-add");
        d.text(d.data("textadd")), t.dialog({
            buttons: r,
            minWidth: 830,
            minHeight: 500,
            modal: !0,
            dialogClass: "tpdialogs",
            create: function(e) {
                jQuery(e.target).parent().find(".ui-dialog-titlebar").addClass("tp-slider-new-dialog-title")
            }
        }), i && y(i), p()
    };
    var y = function(e) {
            switch (e.id = jQuery.trim(e.id), e.video_type) {
                case "youtube":
                    jQuery("#video-dialog-wrap").removeClass("html5select"), jQuery("#video_radio_youtube").trigger("click"), jQuery("#youtube_id").val(e.id), jQuery("#fullscreenvideofun").hide();
                    break;
                case "vimeo":
                    jQuery("#video-dialog-wrap").removeClass("html5select"), jQuery("#video_radio_vimeo").trigger("click"), jQuery("#vimeo_id").val(e.id), jQuery("#fullscreenvideofun").hide();
                    break;
                case "html5":
                    jQuery("#video-dialog-wrap").addClass("html5select"), jQuery("#html5_url_poster").val(e.urlPoster), jQuery("#html5_url_mp4").val(e.urlMp4), jQuery("#html5_url_webm").val(e.urlWebm), jQuery("#html5_url_ogv").val(e.urlOgv), jQuery("#video_radio_html5").trigger("click"), jQuery("#fullscreenvideofun").show();
                    break;
                case "streamvimeo":
                    jQuery("#video-dialog-wrap").removeClass("html5select"), jQuery("#video_radio_streamvimeo").trigger("click");
                    break;
                case "streamyoutube":
                    jQuery("#video-dialog-wrap").removeClass("html5select"), jQuery("#video_radio_streamyoutube").trigger("click");
                    break;
                case "streaminstagram":
                    jQuery("#video-dialog-wrap").removeClass("html5select"), jQuery("#video_radio_streaminstagram").trigger("click");
                    break;
                case "audio":
                    jQuery("#html5_url_audio").val(e.urlAudio), jQuery("#rev-html5-options").hide()
            }
            if (jQuery("#input_video_arguments").val(e.args), jQuery("#input_video_preview").val(e.previewimage), e.use_poster_on_mobile && 1 == e.use_poster_on_mobile ? jQuery("#input_use_poster_on_mobile").prop("checked", "checked") : jQuery("#input_use_poster_on_mobile").prop("checked", ""), e.video_show_visibility && 1 == e.video_show_visibility ? jQuery("#input_video_show_visibility").prop("checked", "checked") : jQuery("#input_video_show_visibility").prop("checked", ""), e.video_play_inline && 1 == e.video_play_inline ? jQuery("#input_video_play_inline").prop("checked", "checked") : jQuery("#input_video_play_inline").prop("checked", ""), e.autoplayonlyfirsttime && 1 == e.autoplayonlyfirsttime && (e.autoplay = "1sttime"), e.autoplay) switch (e.autoplay) {
                case "true":
                case !0:
                    jQuery('#select_video_autoplay option[value="true"]').attr("selected", !0);
                    break;
                case !1:
                case "false":
                    jQuery('#select_video_autoplay option[value="false"]').attr("selected", !0);
                    break;
                default:
                    jQuery('#select_video_autoplay option[value="' + e.autoplay + '"]').attr("selected", !0)
            }
            e.nextslide && 1 == e.nextslide ? jQuery("#input_video_nextslide").prop("checked", "checked") : jQuery("#input_video_nextslide").prop("checked", ""), e.forcerewind && 1 == e.forcerewind ? jQuery("#input_video_force_rewind").prop("checked", "checked") : jQuery("#input_video_force_rewind").prop("checked", ""), e.fullwidth && 1 == e.fullwidth ? jQuery("#input_video_fullwidth").prop("checked", "checked") : jQuery("#input_video_fullwidth").prop("checked", ""), e.controls && 1 == e.controls ? jQuery("#input_video_control").prop("checked", "checked") : jQuery("#input_video_control").prop("checked", ""), e.mute && 1 == e.mute ? jQuery("#input_video_mute").prop("checked", "checked") : jQuery("#input_video_mute").prop("checked", ""), e.disable_on_mobile && 1 == e.disable_on_mobile ? jQuery("#input_disable_on_mobile").prop("checked", "checked") : jQuery("#input_disable_on_mobile").prop("checked", ""), e.cover && 1 == e.cover ? jQuery("#input_video_cover").prop("checked", "checked") : jQuery("#input_video_cover").prop("checked", ""), e.stopallvideo && 1 == e.stopallvideo ? jQuery("#input_video_stopallvideo").prop("checked", "checked") : jQuery("#input_video_stopallvideo").prop("checked", ""), e.allowfullscreen && 1 == e.allowfullscreen ? jQuery("#input_video_allowfullscreen").prop("checked", "checked") : jQuery("#input_video_allowfullscreen").prop("checked", ""), e.preload && jQuery("#input_video_preload option").each(function() {
                jQuery(this).val() == e.preload && jQuery(this).attr("selected", !0)
            }), e.preload_audio && jQuery("#input_audio_preload option").each(function() {
                jQuery(this).val() == e.preload_audio && jQuery(this).attr("selected", !0)
            }), e.preload_wait && jQuery("#input_video_preload_wait option").each(function() {
                jQuery(this).val() == e.preload_wait && jQuery(this).attr("selected", !0)
            }), e.videospeed && jQuery("#input_video_speed option").each(function() {
                jQuery(this).val() == e.videospeed && jQuery(this).attr("selected", !0)
            }), e.dotted && jQuery("#input_video_dotted_overlay option").each(function() {
                jQuery(this).val() == e.dotted && jQuery(this).attr("selected", !0)
            }), e.ratio && jQuery("#input_video_ratio option").each(function() {
                jQuery(this).val() == e.ratio && jQuery(this).attr("selected", !0)
            }), e.videoloop && (1 == e.videoloop ? jQuery('#input_video_loop option[value="loop"]').attr("selected", !0) : jQuery("#input_video_loop option").each(function() {
                jQuery(this).val() == e.videoloop && jQuery(this).attr("selected", !0)
            }));
            var i = jQuery("#button-video-add");
            i.text(i.data("textupdate"));
            var o = jQuery("#button-audio-add");
            switch (o.text(o.data("textupdate")), e.video_type) {
                case "youtube":
                    jQuery("#button_youtube_search").trigger("click");
                    break;
                case "vimeo":
                    jQuery("#button_vimeo_search").trigger("click")
            }
            e.show_cover_pause && 1 == e.show_cover_pause ? jQuery("#input_video_show_cover_pause").prop("checked", "checked") : jQuery("#input_video_show_cover_pause").prop("checked", ""), void 0 !== e.large_controls && 0 == e.large_controls ? jQuery("#input_video_large_controls").prop("checked", "") : jQuery("#input_video_large_controls").prop("checked", "checked"), void 0 !== e.leave_on_pause && 0 == e.leave_on_pause ? jQuery("#input_video_leave_fs_on_pause").prop("checked", "") : jQuery("#input_video_leave_fs_on_pause").prop("checked", "checked"), jQuery("#input_video_start_at").val(e.start_at), jQuery("#input_video_end_at").val(e.end_at), jQuery("#input_video_volume").val(e.volume), RevSliderSettings.onoffStatus(jQuery("#input_video_nextslide")), RevSliderSettings.onoffStatus(jQuery("#input_video_force_rewind")), RevSliderSettings.onoffStatus(jQuery("#input_video_fullwidth")), RevSliderSettings.onoffStatus(jQuery("#input_video_control")), RevSliderSettings.onoffStatus(jQuery("#input_video_mute")), RevSliderSettings.onoffStatus(jQuery("#input_disable_on_mobile")), RevSliderSettings.onoffStatus(jQuery("#input_video_cover")), RevSliderSettings.onoffStatus(jQuery("#input_video_stopallvideo")), RevSliderSettings.onoffStatus(jQuery("#input_video_allowfullscreen")), RevSliderSettings.onoffStatus(jQuery("#input_use_poster_on_mobile")), RevSliderSettings.onoffStatus(jQuery("#input_video_show_cover_pause")), RevSliderSettings.onoffStatus(jQuery("#input_video_large_controls")), RevSliderSettings.onoffStatus(jQuery("#input_video_leave_fs_on_pause")), RevSliderSettings.onoffStatus(jQuery("#input_video_show_visibility")), RevSliderSettings.onoffStatus(jQuery("#input_video_play_inline")), "audio" === e.video_type ? (jQuery("#button-video-add").hide(), jQuery("#button-audio-add").show()) : (jQuery("#button-video-add").show(), jQuery("#button-audio-add").hide()), jQuery("#video_dialog_tabs").removeClass("disabled"), jQuery("#reset_video_dialog_tab").click()
        },
        h = function(e) {
            return e.args = jQuery("#input_video_arguments").val(), e.previewimage = jQuery("#input_video_preview").val(), e.autoplay = jQuery("#select_video_autoplay option:selected").val(), e.use_poster_on_mobile = jQuery("#input_use_poster_on_mobile").is(":checked"), e.video_show_visibility = jQuery("#input_video_show_visibility").is(":checked"), e.video_play_inline = jQuery("#input_video_play_inline").is(":checked"), e.nextslide = jQuery("#input_video_nextslide").is(":checked"), e.forcerewind = jQuery("#input_video_force_rewind").is(":checked"), e.fullwidth = jQuery("#input_video_fullwidth").is(":checked"), e.controls = jQuery("#input_video_control").is(":checked"), e.mute = jQuery("#input_video_mute").is(":checked"), e.disable_on_mobile = jQuery("#input_disable_on_mobile").is(":checked"), e.cover = jQuery("#input_video_cover").is(":checked"), e.stopallvideo = jQuery("#input_video_stopallvideo").is(":checked"), e.allowfullscreen = jQuery("#input_video_allowfullscreen").is(":checked"), e.dotted = jQuery("#input_video_dotted_overlay option:selected").val(), e.preload = jQuery("#input_video_preload option:selected").val(), e.preload_audio = jQuery("#input_audio_preload option:selected").val(), e.preload_wait = jQuery("#input_video_preload_wait option:selected").val(), e.videospeed = jQuery("#input_video_speed option:selected").val(), e.ratio = jQuery("#input_video_ratio option:selected").val(), e.videoloop = jQuery("#input_video_loop option:selected").val(), e.show_cover_pause = jQuery("#input_video_show_cover_pause").is(":checked"), e.start_at = jQuery("#input_video_start_at").val(), e.end_at = jQuery("#input_video_end_at").val(), e.volume = jQuery("#input_video_volume").val(), e.large_controls = jQuery("#input_video_large_controls").is(":checked"), e.leave_on_pause = jQuery("#input_video_leave_fs_on_pause").is(":checked"), e
        },
        j = function() {
            jQuery("#video_radio_youtube").prop("checked", !0), jQuery("#video_radio_vimeo").click(function() {
                jQuery("#video_block_youtube").hide(), jQuery("#video_block_html5").hide(), jQuery("#rev-html5-options").hide(), jQuery("#rev-youtube-options").hide(), jQuery("#rev-playsinline-options").hide(), jQuery("#video_block_vimeo").show(), jQuery("#preview-image-video-wrap").show(), jQuery("#video-dialog-wrap").removeClass("html5select"), jQuery("#fullscreenvideofun").hide(), jQuery(".video-volume").show(), jQuery(".hide-for-vimeo").hide()
            }), jQuery("#video_radio_youtube").click(function() {
                jQuery("#video_block_vimeo").hide(), jQuery("#video_block_html5").hide(), jQuery("#rev-html5-options").hide(), jQuery("#rev-youtube-options").show(), jQuery("#rev-playsinline-options").show(), jQuery("#video_block_youtube").show(), jQuery("#preview-image-video-wrap").show(), jQuery("#video-dialog-wrap").removeClass("html5select"), jQuery("#fullscreenvideofun").hide(), jQuery(".video-volume").show(), jQuery(".hide-for-vimeo").show()
            }), jQuery("#video_radio_html5").click(function() {
                jQuery("#video_block_vimeo").hide(), jQuery("#video_block_youtube").hide(), jQuery("#video_block_html5").show(), jQuery("#rev-youtube-options").hide(), jQuery("#rev-playsinline-options").show(), jQuery("#rev-html5-options").show(), jQuery("#video_content").hide(), jQuery("#preview-image-video-wrap").hide(), jQuery("#video-dialog-wrap").addClass("html5select"), jQuery("#fullscreenvideofun").show(), jQuery(".video-volume").show(), jQuery(".hide-for-vimeo").show()
            }), jQuery("#video_radio_streamyoutube").click(function() {
                jQuery("#video_block_youtube").hide(), jQuery("#video_block_vimeo").hide(), jQuery("#video_block_html5").hide(), jQuery("#rev-html5-options").hide(), jQuery("#rev-youtube-options").hide(), jQuery("#rev-playsinline-options").hide(), jQuery("#preview-image-video-wrap").show(), jQuery("#video-dialog-wrap").removeClass("html5select"), jQuery("#fullscreenvideofun").hide(), jQuery("#video_dialog_tabs").removeClass("disabled"), jQuery("#button-video-add").show(), jQuery(".video-volume").show(), jQuery(".hide-for-vimeo").show()
            }), jQuery("#video_radio_streamvimeo").click(function() {
                jQuery("#video_block_youtube").hide(), jQuery("#video_block_vimeo").hide(), jQuery("#video_block_html5").hide(), jQuery("#rev-html5-options").hide(), jQuery("#rev-youtube-options").show(), jQuery("#rev-playsinline-options").show(), jQuery("#preview-image-video-wrap").show(), jQuery("#video-dialog-wrap").removeClass("html5select"), jQuery("#fullscreenvideofun").hide(), jQuery("#video_dialog_tabs").removeClass("disabled"), jQuery("#button-video-add").show(), jQuery(".video-volume").show(), jQuery(".hide-for-vimeo").hide()
            }), jQuery("#video_radio_streaminstagram").click(function() {
                jQuery("#video_block_youtube").hide(), jQuery("#video_block_vimeo").hide(), jQuery("#video_block_html5").hide(), jQuery("#rev-html5-options").hide(), jQuery("#rev-youtube-options").hide(), jQuery("#rev-playsinline-options").hide(), jQuery("#preview-image-video-wrap").show(), jQuery("#video-dialog-wrap").removeClass("html5select"), jQuery("#fullscreenvideofun").hide(), jQuery("#video_dialog_tabs").removeClass("disabled"), jQuery("#button-video-add").show(), jQuery(".video-volume").hide(), jQuery(".hide-for-vimeo").show()
            }), jQuery("#input_video_cover").change(function() {
                jQuery(this).is(":checked") && (jQuery("#input_video_fullwidth").is(":checked") || jQuery("#input_video_fullwidth").prop("checked", !0), RevSliderSettings.onoffStatus(jQuery("#input_video_fullwidth"))), p()
            }), jQuery("#input_video_fullwidth").change(function() {
                jQuery(this).is(":checked") ? jQuery("#video_full_screen_settings").show() : jQuery("#video_full_screen_settings").hide()
            }), jQuery("#button_youtube_search").click(function() {
                v(!1), jQuery("#youtube_loader").show();
                var e = jQuery("#youtube_id").val();
                e = function(e) {
                    var i = (e = jQuery.trim(e)).split("v=")[1];
                    if (i) {
                        var o = i.indexOf("&"); - 1 != o && (i = i.substring(0, o))
                    } else i = e.split("/")[3] || e;
                    return i
                }(e = jQuery.trim(e)), jQuery("#youtube_id").val(e);
                var i = new Image;
                i.onload = function() {
                    var e = jQuery(this);
                    UniteAdminRev.onYoutubeCallback(e)
                }, i.src = "https://img.youtube.com/vi/" + e + "/maxresdefault.jpg", jQuery("#video_content").show(), setTimeout("UniteAdminRev.videoDialogOnError()", 2e3)
            }), jQuery("#button-video-add, #button-audio-add").click(function() {
                var e = jQuery("#video_radio_html5").prop("checked"),
                    i = jQuery("#video_radio_audio").prop("checked"),
                    o = jQuery("#video_radio_streamyoutube").prop("checked"),
                    t = jQuery("#video_radio_streamvimeo").prop("checked"),
                    r = jQuery("#video_radio_streaminstagram").prop("checked");
                if (jQuery("#video_content").hide(), e)(u = {}).video_type = "html5", u.urlPoster = jQuery("#html5_url_poster").val(), u.urlMp4 = jQuery("#html5_url_mp4").val(), u.urlWebm = jQuery("#html5_url_webm").val(), u.urlOgv = jQuery("#html5_url_ogv").val(), u.video_width = 480, u.video_height = 360, u = h(u), "function" == typeof n && n(u), jQuery("#dialog_video").dialog("close");
                else if (o)(u = {}).video_type = "streamyoutube", u.video_width = 480, u.video_height = 360, u = h(u), "function" == typeof n && n(u), jQuery("#dialog_video").dialog("close");
                else if (t)(u = {}).video_type = "streamvimeo", u.video_width = 480, u.video_height = 360, u = h(u), "function" == typeof n && n(u), jQuery("#dialog_video").dialog("close");
                else if (r)(u = {}).video_type = "streaminstagram", u.video_width = 480, u.video_height = 360, u = h(u), "function" == typeof n && n(u), jQuery("#dialog_video").dialog("close");
                else if (i) {
                    var u = {
                        video_type: "audio"
                    };
                    u.urlAudio = jQuery("#html5_url_audio").val(), u.video_width = 200, u.video_height = 34, u = h(u), "function" == typeof n && n(u), jQuery("#dialog_video").dialog("close")
                } else {
                    if (!d) return !1;
                    d = h(d), "function" == typeof n && n(d), jQuery("#dialog_video").dialog("close")
                }
                try {
                    UniteLayersRev.setLayerSelected(selectedLayerSerial, !0)
                } catch (e) {}
            }), jQuery("#html5_url_audio, #html5_url_ogv, #html5_url_webm, #html5_url_mp4").on("change", function() {
                jQuery("#video_dialog_tabs").removeClass("disabled"), "html5_url_audio" == jQuery(this).attr("id") ? (jQuery("#button-video-add").hide(), jQuery("#button-audio-add").show()) : (jQuery("#button-video-add").show(), jQuery("#button-audio-add").hide())
            }), jQuery("#button_vimeo_search").click(function() {
                v(!1), jQuery("#vimeo_loader").show(), jQuery("#video_content").show();
                var e = jQuery("#vimeo_id").val();
                e = jQuery.trim(e);
                var i, o, t = "//www.vimeo.com/api/v2/video/" + (i = e, o = (i = jQuery.trim(i)).replace(/[^0-9]+/g, ""), e = jQuery.trim(o)) + ".json?callback=UniteAdminRev.onVimeoCallback";
                jQuery.getScript(t), setTimeout("UniteAdminRev.videoDialogOnError()", 2e3)
            }), jQuery("#input_video_fullwidth").change(p)
        };
    jQuery(document).ready(function() {
        j(), jQuery("#button_general_settings").click(function() {
            jQuery("#loader_general_settings").hide(), jQuery("#dialog_general_settings").dialog({
                minWidth: 800,
                minHeight: 500,
                modal: !0,
                dialogClass: "tpdialogs",
                create: function(e) {
                    jQuery(e.target).parent().find(".ui-dialog-titlebar").addClass("tp-slider-new-dialog-title")
                }
            })
        }), jQuery("#button_save_general_settings").click(function() {
            var e = RevSliderSettings.getSettingsObject("form_general_settings");
            UniteAdminRev.ajaxRequest("update_general_settings", e, function(e) {})
        }), jQuery("#trigger_database_creation").click(function() {
            UniteAdminRev.ajaxRequest("fix_database_issues", {}, function(e) {})
        }), Q(), jQuery("#rs-validation-activate").click(function() {
            var i = {
                code: jQuery('input[name="rs-validation-token"]').val()
            };
            UniteAdminRev.ajaxRequest("activate_purchase_code", i, function(i) {
                0 == i.success ? jQuery("#register-wrong-purchase-code").click() : void 0 !== i.error && "exist" == i.error && e.showErrorMessage(i.msg)
            }, void 0, !0)
        }), jQuery("#rs-validation-deactivate").click(function() {
            UniteAdminRev.ajaxRequest("deactivate_purchase_code", "")
        })
    }), e.setMultipleTextKey = function(e, i) {
        u[e] = i
    }, e.getMultipleTextKey = function(e) {
        return u[e]
    };
    var Q = function() {
        jQuery("body").on("click", ".remove_multiple_text", function() {
            jQuery("#" + jQuery(this).data("remove")).remove(), jQuery(this).parent().remove()
        }), jQuery(".multiple_text_add").click(function() {
            var i = jQuery(this).data("name"),
                o = e.getMultipleTextKey(i) + 1,
                t = jQuery("." + i + "_TEMPLATE").html();
            t = t.replace(/##ID##/gi, i + "_" + o).replace(/##NAME##/gi, i), jQuery("#" + i + "_row .setting_input").append(t), e.setMultipleTextKey(i, o)
        })
    };
    e.parseCssMultiAttribute = function(e) {
        if ("" == e) return !1;
        var i = e.split(" "),
            o = [];
        switch (i.length) {
            case 1:
                o[0] = i[0], o[1] = i[0], o[2] = i[0], o[3] = i[0];
                break;
            case 2:
                o[0] = i[0], o[1] = i[1], o[2] = i[0], o[3] = i[1];
                break;
            case 3:
                o[0] = i[0], o[1] = i[1], o[2] = i[2], o[3] = i[1];
                break;
            case 4:
                o[0] = i[0], o[1] = i[1], o[2] = i[2], o[3] = i[3];
                break;
            case 0:
            default:
                return !1
        }
        return o
    }, e.convertHexToRGB = function(e) {
        return [(e = parseInt(e.indexOf("#") > -1 ? e.substring(1) : e, 16)) >> 16, (65280 & e) >> 8, 255 & e]
    }, e.initGoogleFonts = function() {
        jQuery("#eg-font-setting-change").click(function() {
            UniteAdminRev.ajaxRequest("change_google_fonts_settings", {
                setting: jQuery('input[name="load_fonts_place"]:checked').val()
            }, function(e) {})
        }), jQuery("#eg-font-add").click(function() {
            jQuery("#font-dialog-wrap").dialog({
                modal: !0,
                draggable: !1,
                resizable: !1,
                width: 470,
                height: 320,
                closeOnEscape: !0,
                dialogClass: "wp-dialog",
                create: function(e) {
                    jQuery(e.target).parent().find(".ui-dialog-titlebar").addClass("tp-slider-new-dialog-title")
                },
                buttons: [{
                    text: "Add Font",
                    click: function() {
                        var i = {};
                        if (i.handle = e.sanitize_input(jQuery('input[name="eg-font-handle"]').val()), i.url = jQuery('input[name="eg-font-url"]').val(), i.handle.length < 3 || i.url.length < 3) return alert(rev_lang.handle_at_least_three_chars), !1;
                        UniteAdminRev.ajaxRequest("add_google_fonts", i, function(e) {})
                    }
                }]
            })
        }), jQuery("body").on("click", ".eg-font-edit", function() {
            if (confirm(rev_lang.really_change_font_sett)) {
                var e = {},
                    i = jQuery(this);
                e.handle = i.closest(".inside").find('input[name="esg-font-handle[]"]').val(), e.url = i.closest(".inside").find('input[name="esg-font-url[]"]').val(), UniteAdminRev.ajaxRequest("edit_google_fonts", e, function(e) {})
            }
        }), jQuery("body").on("click", ".eg-font-delete", function() {
            if (confirm(rev_lang.really_delete_font)) {
                var e = {},
                    i = jQuery(this);
                e.handle = i.closest(".inside").find('input[name="esg-font-handle[]"]').val(), UniteAdminRev.ajaxRequest("remove_google_fonts", e, function(e) {
                    1 == e.success && i.closest(".postbox.eg-postbox").remove()
                })
            }
        })
    }, e.sanitize_input = function(e) {
        return e.replace(/ /g, "-").replace(/[^-0-9a-zA-Z_-]/g, "")
    }, e.sanitize_input_lc = function(e) {
        return e.replace(/ /g, "-").replace(/[^-0-9a-z_-]/g, "")
    }, e.initAccordion = function() {
        jQuery(".postbox-arrow").each(function(e) {
            jQuery(this).closest("h3").click(function() {
                var e = jQuery(this);
                e.hasClass("box-closed") ? (jQuery(".postbox-arrow").each(function() {
                    var e = jQuery(this).closest("h3");
                    e.closest(".postbox").find(".inside").slideUp("fast"), e.addClass("box-closed")
                }), e.closest(".postbox").find(".inside").slideDown("fast"), e.removeClass("box-closed")) : (e.closest(".postbox").find(".inside").slideUp("fast"), e.addClass("box-closed"))
            })
        })
    }, e.return_ajaxurl_param = function() {
        return -1 === ajaxurl.indexOf("?") ? "?" : "&"
    },e.inithooksetting = function(){
		
		jQuery('#eg-hook-add').click(function(){
			jQuery('#hook-dialog-wrap').dialog({
				modal:true,
				draggable:false,
				resizable:false,
				width:470,
				height:320,
				closeOnEscape:true,
				dialogClass:'wp-dialog',
				buttons: [ { text: 'Add Hook', click: function() {
					var data = {};
					
					// data.handle = t.sanitize_input(jQuery('input[name="eg-font-handle"]').val());
					data['hookname'] = jQuery('input[name="eg-hook-name"]').val();
					
					// if(data.handle.length < 3 || data.url.length < 3){
					// 	alert('Handle has to be at least three character long');
					// 	return false;
					// }
					
					UniteAdminRev.ajaxRequest("add_new_hook", data, function(response){}); //'#eg-font-add',
					
				} } ],
			});
		});
		
		
		// jQuery('body').on('click', '.eg-hook-edit', function(){
		// 	if(confirm('Really change Hook settings?')){
		// 		var data = {};
		// 		var el = jQuery(this);
		// 		data.handle = el.closest('.inside').find('input[name="esg-font-handle[]"]').val();
		// 		data['url'] = el.closest('.inside').find('input[name="esg-font-url[]"]').val();
				
		// 		UniteAdminRev.ajaxRequest("edit_google_fonts", data, function(response){}); //'#eg-font-add, .eg-font-edit, .eg-font-delete',
		// 	}
		// });
		
		
		jQuery('body').on('click', '.eg-hook-delete', function(){
			if(confirm('Really delete Hook?')){
				var data = {};
				var el = jQuery(this);
				
				data.hookname = el.closest('.inside').find('input[name="esg-hook-name[]"]').val();
				
				UniteAdminRev.ajaxRequest("removes_hooks", data, function(response){ 

					if(response.success == true){
						el.closest('.postbox.eg-postbox').remove();
					}
				});
			}
		});
		
	}
};