<?php
  $pageContent = "contentPages/contentProducts.php";
  include("templates/template.php");
?>
<script type="text/javascript">
  setPageTitle("Products");
  let thisRow="";
  let productDetails = "";

  const thisCardContainer = document.querySelector("#cardContainer");
        const serverFileGetProducts = "Processes/getProducts.php";

        // ajaxGetDataFromServer(serverFileGetProducts, function(parArrayProducts){


        //   for(product of parArrayProducts)
        //   {
        //     thisCardContainer.appendChild(createCard({productNumber: product.ProductNumber
        //                                             , productName: product.ProductName
        //                                             , price: product.UnitPrice
        //                                             , image: product.ProductImage}));
        //   }
        // });

        fetch(serverFileGetProducts)
        .then(function(response){return response.json();})
        .then(function(parArrayProducts){
              for(product of parArrayProducts)
              {
                thisCardContainer.appendChild(createCard({productNumber: product.ProductNumber
                                                        , productName: product.ProductName
                                                        , price: product.UnitPrice
                                                        , image: product.ProductImage}));
              }
            });//fetch(serverFileGetProducts)
        
</script>


