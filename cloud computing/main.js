console.log("hello")
// {} / [] / ()
// {()} / {[]} / {{}} /  ({}) / ([]) / (()) / [{}] / [()] / [[]]
// {{{}}} / {{()}} / {{[]}} / {({})} / {} /  ((())) / (([])) / (({})) / [[[]]] / [[{}]] / [[()]]
// 
//   [{()}]
let string = prompt("enter the string :");
// string.length
function validePattren(string) {
    if (string.length > 6) {
        alert("ra9m rah fayt 6 ar9am");
    } else {
        if (string.length % 2 !== 0) {
            alert("gha thna asat cest invalid ")
        } else {
            if (string === "") {
                alert("mdakhl string khawi asat mn niytk")
            } else {
                alert("daba bda lma39ol")
                let check = false;
                for (let i = 0; i < string.length; i++) {
                    if (string[i] !== "[" && string[i] !== "]" && string[i] !== "{" && string[i] !== "}" && string[i] !== "(" && string[i] !== ")") {
                        alert("invalid abro bach nkono mfahmin")
                        check = false
                        break;
                    }
                    else {
                        check = true
                    }
                }
                if(check === true){
                    alert("rak dakhlti abro les symboles m9adin rak nadi")
                    let check2 = false ;
                    for (let i = 0; i < string.length/2 ; i++) {
                        let str = string[string.length/2-1-i]+string[string.length/2+i];
                        if(str=== "{}" ||str==="[]"||str==="()"){
                                check2 = true;
                            }
                            else{
                                check2 = false;
                                alert("dommage asat rah invalid kayn problem f order abro.")
                                break;
                            }
                        // if(string[string.length-1-i] === string[string.length+i]){
                        // console.log()
                    }
                    if(check2 === true){
                        alert("valid asat 3la slamtk");
                    } 
                }
                
            }
        }
    }

}
validePattren(string)