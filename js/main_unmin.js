function check(a) {
    var b = a.userid.value.trim(),
        c = a.pswrd.value.trim();
    $.ajax({
        type: "POST",
        url: "php/login.php",
        data: {
            name: b,
            password: c
        },
        success: function(a) {
            a = a.split(" ");
            "ok" == a[0] ? ("undefined" === typeof window.saves1 && "undefined" === typeof window.saves2 ? set_global(b, a[1], a[2], !1, 0, 0) : "undefined" !== typeof window.saves1 && "undefined" === typeof window.saves2 ? set_global(b, a[1], a[2], !1, window.saves1.item, 0) : "undefined" === typeof window.saves1 && "undefined" !== typeof window.saves2 ? set_global(b, a[1], a[2], !1, 0,
                window.saves2.item) : set_global(b, a[1], a[2], !1, window.saves1.item, window.saves2.item), value_or_null = (document.cookie.match(/^(?:.*;)?account=([^;]+)(?:.*)?$/) || [, null])[1], value_or_null || (document.cookie = "account=" + b + " " + c + "; expires=Fri, 3 Sep 2016 20:47:11 UTC", swal("Good job!", "Scheduler will remember you from now on!", "success")), alertify.success("Hello " + b + "!")) : swal({
                title: "Error",
                text: "Invalid username or password!",
                type: "error",
                showConfirmButton: !0
            })
        }
    })
}

function set_global(a, b, c, d, e, f) {
    window.player = a;
    window.position = b;
    window.ability = c;
    window.obj_need_save = {
        item: d
    };
    window.saves1 = {
        item: e
    };
    window.saves2 = {
        item: f
    }
}

function set_global_creator1(a) {
    window.creator1 = a;
    "undefined" === typeof window.obj_need_save && (window.obj_need_save = {
        item: !1
    });
    "undefined" === typeof window.saves1 && (window.saves1 = {
        item: -1
    });
    "undefined" === typeof window.saves2 && (window.saves2 = {
        item: -1
    })
}

function set_global_creator2(a) {
    window.creator2 = a;
    "undefined" === typeof window.obj_need_save && (window.obj_need_save = {
        item: !1
    });
    "undefined" === typeof window.saves1 && (window.saves1 = {
        item: -1
    });
    "undefined" === typeof window.saves2 && (window.saves2 = {
        item: -1
    })
}
jQuery(document).ready(function() {
    var a = (document.cookie.match(/^(?:.*;)?account=([^;]+)(?:.*)?$/) || [, null])[1];
    a ? (a = a.split(" "), $("#login input:first").val(a[0]), $("#login").find("input").eq(1).val(a[1]), $("#login").find("input").eq(2).click()) : introJs().start();
    $(window).on("beforeunload", function() {
        if (void 0 != window.obj_need_save && 1 == window.obj_need_save.item) return "If you do not save, all changes will be LOST!"
    })
});