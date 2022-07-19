require('./bootstrap');
$("input,textarea,select").change( function () {this.reportValidity();} );
$('input[type=text],input[type=number],input[type=email],textarea,select').blur( function () {this.reportValidity();} );