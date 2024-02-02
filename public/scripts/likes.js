let divHeart;
const currentUrl = window.location.origin;

function checkLikes(event) {
    //get current Div
   // let divHeart;
    if (event.target.tagName == "SPAN"){
            divHeart  = event.target.parentNode;
    } else {
        divHeart = event.target;
    }
    //const divHeart = document.querySelector("#likesDiv");
    const bizId = divHeart.dataset.bizid;
    let userId = divHeart.dataset.userid;
    let likeId = divHeart.dataset.likeid;
    let userLikeit = divHeart.dataset.userlikeit;

    if (userLikeit == 0){
        createLike(bizId, userId);
    } else {
        deleteLike(likeId);
    }
}

async function createLike(bizId, userId) {
     //variables
    // console.log('create');
    const url = currentUrl+"/api/v1/likes/";

    const data = {
        "bizId" : bizId,
        "userId" : userId
        }

    try {
        const response =  await fetch(url, {
                method:'POST',
                headers:{'Content-Type': 'application/json'},
                body: JSON.stringify(data)
            });

            const result = await response.json();
            console.log("Success:", result);
            usingDataCreated(result);
        } catch (error){
            console.error("Error", error);
    }
}
function usingDataCreated(mydata) {
    //console.log(mydata);
    const propertyValues = Object.values(mydata);
    //console.log(propertyValues);
    propertyValues.forEach(element => {
       // const likeDiv = document.querySelector('#likesDiv');
        divHeart.setAttribute('data-likeid', element.likeId);
        divHeart.setAttribute("data-userlikeit", 1)
        const heart = divHeart.querySelector('#heart');
        heart.style.color = "red";

        //add likes count
        addLikes();
    })
}


async function deleteLike(likeId) {
        //console.log("LikeId", likeId);

        const url= currentUrl+"/api/v1/likes/"+likeId;

        await fetch(url, {
                  method:'DELETE',
                  headers:{'Content-Type': 'application/json'}
                      })
                  .then (response=>{
                      if(!response.ok){
                          throw new Error('Not succesful')
                      }
                  })
                  .catch(error => console.log(error));

                  const result = "Deleted";
                  usingDataDeleted(result);
   }


   function usingDataDeleted(mydata)
   {
       if(mydata === "Deleted")
       {
          // const likeDiv = document.querySelector("#likesDiv");
           //const heart = document.querySelector('#heart');
           const heart = divHeart.querySelector('#heart');

           heart.style.color = "#cecece";
           divHeart.setAttribute("data-likeId", 0);
           divHeart.setAttribute("data-userlikeit", 0)

           //substract likes count
           subsLikes();
       }
   }

   function addLikes() {

    const spanTotalLikes = divHeart.querySelector("#countLikes");
    let likesTotal = spanTotalLikes.innerHTML;
    likesTotal = likesTotal.substring(1, likesTotal.length - 1);
    let suma = parseInt(likesTotal) + 1;
    spanTotalLikes.innerHTML = "(" + suma + ")";
}

function subsLikes() {

    const spanTotalLikes = divHeart.querySelector("#countLikes");
    let likesTotal = spanTotalLikes.innerHTML;
    likesTotal = likesTotal.substring(1, likesTotal.length - 1);
    let suma = parseInt(likesTotal) - 1;
    spanTotalLikes.innerHTML = "(" + suma + ")";
}
