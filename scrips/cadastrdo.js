//https://angolaapi.herokuapp.com/api/v1/validate/bi/[bi]
//https://consulta.edgarsingui.ao/consultar/{$numeroBI

const senha =document.getElementById('senha')
const rep =document.getElementById("req")
function senha_forte(){
      if(rep.value<8){
      rep.style.display="block"
      }else{
            rep.style.display="none"
            }
}
