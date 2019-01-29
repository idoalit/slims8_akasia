/**
 * @Author: Waris Agung Widodo <user>
 * @Date:   2018-01-21T12:15:49+07:00
 * @Email:  ido.alit@gmail.com
 * @Filename: app.js
 * @Last modified by:   user
 * @Last modified time: 2018-01-23T18:22:24+07:00
 */

'use strict';

Vue.directive('click-outside', {
    priority: 700,
    bind: function (el, binding, vnode) {
        window.event = function (event) {
            if (!(el == event.target || el.contains(event.target))) {
                vnode.context[binding.expression](event);
            }
        };
        document.body.addEventListener('click', window.event)
    },
    unbind: function (el) {
        document.body.removeEventListener('click', window.event)
    },
});

var show_advanced = new Vue({
    el: '#search-wraper',
    data: function () {
        return {
            show: false,
            isFocus: false,
            searchBy: 'all'
        }
    },
    methods: {
        searchOnFocus: function (e) {
            this.show = true;
            this.isFocus = true;
            const urlParams = new URLSearchParams(window.location.search);
            const search = urlParams.get('search');
            const page = urlParams.get('p');
            if (!search && !page) window.scrollTo(0, 250)
        },
        searchOnBlur: function(e) {
            this.isFocus = false
        },
        hideSearch: function () {
            if (!this.isFocus) {
                this.show = false;
                this.searchBy = 'all'
            }
        }
    }
});

$(document).ready(() => {
    // 65x83
    var images = $('.fit-height');
    $.each(images, (i, v) => {
        var width = $(v).width(),
            height = (width * 83) / 65;
        // console.log(height);
        $(v).height(height)
    })
});

// remove &nbsp in pagging
$('.biblioPaging .pagingList').html(function (i, h) {
    return h.replace(/&nbsp;/g, '');
});
