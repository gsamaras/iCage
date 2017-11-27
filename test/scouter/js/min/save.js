function validate_todo_list(t){for(var e,a=!0,i=1;4>=i;++i)e=$("label[for=check-"+i+"]").text(),"string"==typeof e||e instanceof String||(a=!1),t["todo"+(i-1)]=e!="Task"+i?e:"void";return a}function validate_m2m(t){var e=!0;return $(".rounded-list li a").each(function(a){var i=$(this).text();"string"==typeof i||i instanceof String||(e=!1),t["m2m"+a]=i}),e}function validate_special(t){var e=!0,a=$("#spec").text();return"string"==typeof a||a instanceof String||(e=!1),t.special=a,e}function validate_pos(t){var e=!0,a=$('*[class^="inset-text-effect-"]').text();return"GK"!=a&&"LB"!=a&&"CB"!=a&&"RB"!=a&&"DMF"!=a&&"CMF"!=a&&"AMF"!=a&&"WF"!=a&&"CF"!=a&&(e=!1),t.pos=a,e}function validate_stats_0(t){var e=!0;return $("#stats_0 li div").each(function(a){var i=$(this).text();return 20>i||i>100?(e=!1,!1):void(0==a?t.att=i:1==a?t.def=i:2==a?t.strength=i:3==a?t.stamina=i:4==a?t.sp=i:5==a?t.head=i:t.drib=i)}),e}function validate_stats_1(t){var e=!0;return $("#stats_1 li div").each(function(a){var i=$(this).text();return 20>i||i>100?(e=!1,!1):void(0==a?t.agility=i:1==a?t.shot=i:2==a?t.keeper=i:3==a?t.teamwork=i:4==a?t.tech=i:5==a?t.menta=i:t.freekick=i)}),e}function validate_info_list(t){var e=!0;return $("#info li div").each(function(a){var i=$(this).text();0==a?("string"==typeof i||i instanceof String||(e=!1),t.name=i):1==a?(0==testDate(i)&&(e=!1),t.birth=i):2==a?("string"==typeof i||i instanceof String||(e=!1),t.height=i):3==a?("string"==typeof i||i instanceof String||(e=!1),t.team=i):4==a?(0==testDate(i)&&(e=!1),t.joined=i):5==a?(0>i&&(e=!1),t.number=i):"R"!=i&&"L"!=i?e=!1:t.foot=i}),e}function save_img(){var t=$("#input_pic").prop("files")[0],e=new FormData;e.append("file",t),$.ajax({url:"php/upload.php",dataType:"text",cache:!1,contentType:!1,processData:!1,data:e,type:"post",success:function(t){"ok"!=t&&alertify.error("Image could not be uploaded!")}})}function testDate(t){var e=t.match(/^(\d{2})\/(\d{2})\/(\d{4})$/);if(null===e)return!1;var a=parseInt(e[1]),i=parseInt(e[2],10);parseInt(e[3],10);return i>=1&&12>=i&&a>=1&&31>=a?!0:!1}function isInt(t){return!isNaN(t)&&function(t){return(0|t)===t}(parseFloat(t))}$(document).ready(function(){$("#save_btn").click(function(t){var e={},a=$("#input_pic").prop("files")[0];if("undefined"==typeof a){if("Save"==$("#save_btn").text())return alertify.error("No image uploaded, save aborted!"),!1}else e.pic=a.name;var i=validate_info_list(e),n=validate_stats_0(e),r=validate_stats_1(e),s=validate_pos(e),o=validate_special(e),l=validate_m2m(e),c=validate_todo_list(e);return 0==i?(alertify.error("Invalid personal info, cancelled!"),!1):0==n?(alertify.error("Invalid stats at 1st column, cancelled!"),!1):0==r?(alertify.error("Invalid stats at 2nd column, cancelled!"),!1):0==s?(alertify.error("Invalid pos, cancelled! Options: GK, LB, CB, RB, DMF, CMF, AMF, WF and CF"),!1):0==o?(alertify.error("Invalid special ability, cancelled!"),!1):0==l?(alertify.error("Invalid m2m list, cancelled!"),!1):0==c?(alertify.error("Invalid todo list, cancelled!"),!1):void $.ajax({url:"php/save.php",type:"POST",contentType:"application/json",data:JSON.stringify(e),dataType:"html",success:function(t){return"found"==t?void alertify.warning("Player already exists! Only m2m list updated."):(save_img(),void alertify.success("Saved!"))},error:function(t,e,a){$.mobile.loading("hide"),200==t.status?(alert("status = 200"),alert(e)):(alert("status = "+t.status),alert(a))}})})});