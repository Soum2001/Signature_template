function firstName(val) {
alert(val);
   var x = document.getElementById('name');
    x.innerHTML =val;
}
function lastName(val) {
       var x = document.getElementById('name');
       var first_name = document.getElementById('first_name').value;
       alert(first_name);
       x.innerHTML = first_name+" "+val;
}
function job(val) {
    var designation = document.getElementById('designation');
    designation.innerHTML = val;
}
function email(val){
    var email = document.getElementById('email');
    email.innerHTML = val;
}
function company(val){
    var company_name = document.getElementById('company_name');
    company_name.innerHTML = val;
}


const first = document.querySelector(".first");
const iframe = document.querySelector("iframe");
const btn = document.querySelector("button");

btn.addEventListener("click", () => {
  var html = first.textContent;
  iframe.src = "data:text/html;charset=utf-8," + encodeURI(html);
});


first.addEventListener('keyup',()=>{
  var html = first.textContent;
  iframe.src = "data:text/html;charset=utf-8," + encodeURI(html);
})

first.addEventListener("paste", function(e) {
        e.preventDefault();
        var text = e.clipboardData.getData("text/plain");
        document.execCommand("insertText", false, text);
    });

    // var template = {
    
    //     runCode:function(){
    //         var content = document.getElementById('sourceCode').value;
    //         var iframe = document.getElementById('targetCode');
    //         iframe = (iframe.contentWindow) ? iframe.contentWindow : (iframe.contentDocument.document) ? iframe.contentDocument.document : iframe.contentDocument;
    //         iframe.document.open();
    //         iframe.document.write(content);
    //         iframe.document.close();
    //         return false;
    //     }
        
    // }
    function runCode() {
        var content = document.getElementById('sourceCode').value;
        var iframe = document.getElementById('targetCode');
        iframe = (iframe.contentWindow) ? iframe.contentWindow : (iframe.contentDocument.document) ? iframe.contentDocument.document : iframe.contentDocument;
        iframe.document.open();
        iframe.document.write(content);
        iframe.document.close();
        return false;
    }
    runCode();

function storeTemplate(){
    var source_code = document.getElementById('sourceCode').value;
    //console.log(source_code);
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            'Accept': 'application/json',
        },
        url: 'store_list',
        type: 'post',
        data: { source_code : source_code },
        success: function (response) {
            var jsonData = JSON.parse(JSON.stringify(response));
            if (jsonData.dbStatus) {
                toastr.success(jsonData.dbMessage);
            }
            else {
                toastr.error(jsonData.dbMessage);
            }
            //      $("#home").html("");
            //     // //document.getElementById(home).innerHTML = "";
            //      jQuery('.search').html(response);
        }
    });
}    



