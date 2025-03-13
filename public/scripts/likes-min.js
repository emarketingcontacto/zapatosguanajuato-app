let divHeart;const currentUrl=window.location.origin;function checkLikes(event){if(event.target.tagName=="SPAN"){divHeart=event.target.parentNode}else{divHeart=event.target}
const bizId=divHeart.dataset.bizid;let userId=divHeart.dataset.userid;let likeId=divHeart.dataset.likeid;let userLikeit=divHeart.dataset.userlikeit;if(userLikeit==0){createLike(bizId,userId)}else{deleteLike(likeId)}}
async function createLike(bizId,userId){const url=currentUrl+"/api/v1/likes/";const data={"bizId":bizId,"userId":userId}
try{const response=await fetch(url,{method:'POST',headers:{'Content-Type':'application/json'},body:JSON.stringify(data)});const result=await response.json();console.log("Success:",result);usingDataCreated(result)}catch(error){console.error("Error",error)}}
function usingDataCreated(mydata){const propertyValues=Object.values(mydata);propertyValues.forEach(element=>{divHeart.setAttribute('data-likeid',element.likeId);divHeart.setAttribute("data-userlikeit",1)
const heart=divHeart.querySelector('#heart');heart.style.color="red";addLikes()})}
async function deleteLike(likeId){const url=currentUrl+"/api/v1/likes/"+likeId;await fetch(url,{method:'DELETE',headers:{'Content-Type':'application/json'}}).then(response=>{if(!response.ok){throw new Error('Not succesful')}}).catch(error=>console.log(error));const result="Deleted";usingDataDeleted(result)}
function usingDataDeleted(mydata){if(mydata==="Deleted"){const heart=divHeart.querySelector('#heart');heart.style.color="#cecece";divHeart.setAttribute("data-likeId",0);divHeart.setAttribute("data-userlikeit",0)
subsLikes()}}
function addLikes(){const spanTotalLikes=divHeart.querySelector("#countLikes");let likesTotal=spanTotalLikes.innerHTML;likesTotal=likesTotal.substring(1,likesTotal.length-1);let suma=parseInt(likesTotal)+1;spanTotalLikes.innerHTML="("+suma+")"}
function subsLikes(){const spanTotalLikes=divHeart.querySelector("#countLikes");let likesTotal=spanTotalLikes.innerHTML;likesTotal=likesTotal.substring(1,likesTotal.length-1);let suma=parseInt(likesTotal)-1;spanTotalLikes.innerHTML="("+suma+")"}
