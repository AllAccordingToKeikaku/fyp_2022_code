<?php
?>
<!DOCTYPE html>
<html>
    <script>
        isProfileClicked = false;

        function signatureFunction(){
            
        }

        function diyFunction(){

        }

        function acaiFunction(){

        }

        function beveragesFunction(){

        }

        function clickedDrop(){
            document.getElementById("accountDrop").style.display= "none";
            document.getElementById("accountCollapse").style.display = "block";
            document.getElementById("accountSignOut").style.display = "block";
        }

        function clickedCollapse(){
            document.getElementById("accountDrop").style.display = "block";
            document.getElementById("accountCollapse").style.display = "none";
            document.getElementById("accountSignOut").style.display = "none";
        }

        function signOut(){
            alert("You clicked on Sign out");
        }

        function profileClicked(){
            if (isProfileClicked == false){
                isProfileClicked = true;
                document.getElementById("displayProfile").style.display = "block";
            }
            else{
                isProfileClicked = false;
                document.getElementById("displayProfile").style.display = "none";
            }
        }

        
        function profileDetails(){
            console.log(document.cookie);
            var tempLogInName = getCookie("fullName");
            document.getElementById('accountNameDetails').innerHTML = tempLogInName;
        }

        function getCookie(name){
            const cDecoded = decodeURIComponent(document.cookie);
            const cArray = cDecoded.split("; ");
            let result = null;
            
            cArray.forEach(element => {
                if(element.indexOf(name) == 0){
                    result = element.substring(name.length + 1)
                }
            })
            return result;
        }

        function createItemTables(){
            var table = document.getElementById("signatureItems");
            var itemArray = ["HAWAIIAN SALMON", "HAWAIIAN SALMON", "HAWAIIAN SALMON", "HAWAIIAN SALMON", 
            "HAWAIIAN SALMON", "HAWAIIAN SALMON", "HAWAIIAN SALMON", "HAWAIIAN SALMON", "HAWAIIAN SALMON", "HAWAIIAN SALMON"];
            var currentRow = 0;
            var row = table.insertRow(currentRow);
            for (var x=0; x<itemArray.length; x++){              
                if (x%3 == 0){
                    currentRow++;
                    row = table.insertRow(currentRow);
                }
                var cell = row.insertCell(x%3);
                cell.innerHTML = '<text id="listItem' + String(x) + '"></text>';
            }

            for (var x=0; x<itemArray.length; x++){
                document.getElementById("listItem"+String(x)).innerHTML = createItemListing();
            }
        }

        function createItemListing(){
            var imageLink = "/fyp_codes/MoshiQ2 Assets/Menu/Hawaiian Salmon.png";
            var listingName = "HAWAIIAN SALMON";
            var listingPrice = "$15.50";
            var listingValue = "Available";
            var listingValueColor = "#C3E3A2";

            var listing='<td><img src="' + imageLink + '" style="width:200px;height:auto">'+
                            '</br><text>' + listingName + '</text></br></br>' +
                            '<div style="float:left;">' +
                                '<b><text>' + listingPrice + '</text></b></br>' +
                                '<input type="button" value="' + listingValue + '" style="background-color:' + listingValueColor + ';border:1px;border-radius:10px;margin-top:10px;font-weight:bold">' +
                            '</div>' +
                            '<input class="addButton" type="button" value="Add"></td>';

            return listing;
        }
    </script>
    <style>
        .mouseOverEffects{
            border-left: 3px solid white;
        }

        .mouseOverEffects:hover{
            border-left : 3px solid #437E96;
        }

        .arrow {
            border: solid black;
            border-width: 0 1px 1px 0;
            display: inline-block;
            padding: 3px;
        }

        .addButton{
            border: none;
            background-color:#437E96;
            border-radius:10px;
            margin-left:50px;
            margin-top:10px;
            color:white;
            height:30px;
            width:60px;
            display:inline-block;
        }

        .addButton:hover{
            cursor: pointer;
            border: 2px solid black;
        }

        .example::-webkit-scrollbar {
            display: none;
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        .example {
            -ms-overflow-style: none;  /* IE and Edge */
        }
    </style>
    <body onload="profileDetails();createItemTables()">
        <form>
            <div style="width:1100px;margin-left:auto;margin-right:auto;">
                <div style="float:right">
                    <img src="/fyp_codes/MoshiQ2 Assets/Profile Icon.png" style="display:block;margin-left:120px;width:70px;height:auto;" onclick="profileClicked()"></br>
                    <div id="displayProfile" name="displayProfile" style="margin-right:30px" hidden>
                        <text style="margin-left:10%;margin-right:auto;display:inline-block" id="accountNameDetails"></text></br>
                        <input type="button" id="accountDrop" name="accountDrop" value="Account &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&#x25B2;" style="color:gray;margin-left:10px;margin-top:5px;height:30px;" onclick="clickedDrop()">
                        <input type="button" id="accountCollapse" name="accountCollapse" value="Account &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&#x25BC;" style="color:gray;margin-left:10px;margin-top:5px;height:30px;" onclick="clickedCollapse()" hidden>
                        <input type="button" id="accountSignOut" name="accountSignOut" value="Sign out &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;" style="margin-left:10px;margin-right:auto;margin-top:5px;width:188px;height:30px;" onclick="signOut()" hidden>
                    </div>
                </div>

                <div style="margin-top:1px">
                    <img src="/fyp_codes/MoshiQ2 Assets/Logo.png" style="margin-left:0px;width:500px;height:200px;display:block;"></br>
                </div>

                <div style="margin-left:30px;display:inline-block;border-left:1px;">
                    <text style="color:black;font-size:30px">OUR MENU</text></br>
                    <div>
                        <div style="float:left;margin-left:40px;margin-top:30px;display:inline-block">
                            <div class="mouseOverEffects" style="width:120px">
                                <a href="#signatureDisplay"><input type="button" id="signatureButton" name="signatureButton" value="Signature" style="padding:10px;border:0px;background-color:white" onclick="signatureFunction()"></a></br>
                            </div>
                        </div></br>
                        <div style="float:left;margin-left:40px;margin-top:30px;display:inline-block">
                            <div class="mouseOverEffects" style="width:120px">
                                <a href="#diyDisplay"><input type="button" id="diyButton" name="diyButton" value="DIY moshiQ&#178; bowls" style="padding:10px;border:0px;background-color:white" onclick="diyFunction()"></a></br>
                            </div>
                        </div></br>

                        <div style="float:left;margin-left:40px;margin-top:30px;display:inline-block">
                            <div class="mouseOverEffects" style="width:120px">
                                <a href="#acaiDisplay"><input type="button" id="acaiButton" name="acaiButton" value="Acai Bowls" style="padding:10px;border:0px;background-color:white" onclick="acaiFunction()"></a></br>
                            </div>
                        </div></br>

                        <div style="float:left;margin-left:40px;margin-top:30px;display:inline-block">
                            <div class="mouseOverEffects" style="width:120px">
                                <a href="#beveragesDisplay"><input type="button" id="beveragesButton" name="beveragesButton" value="Beverages" style="padding:10px;border:0px;background-color:white" onclick="beveragesFunction()"></a></br>
                            </div>
                        </div></br>
                    </div>
                </div>

                <div class="example" style="float:right;width:800px;height:900px;overflow:auto;">
                    <div id="signatureDisplay" style="width:800px;">
                        <table style="border-spacing:20px 0px">
                            <tr>
                                <text style="color:black;font-size:30px;">
                                    <a id="signatureDisplay">SIGNATURE</a>                              
                                </text></br></br>
                                <text>Build your own exclusively now!</text></br>
                            </tr>
                            <table id="signatureItems" style="border-spacing:30px;">
                            </table>
                        </table>
                    </div></br>

                    <div id="diyDisplay" style="width:800px;margin-top:100px">
                        <table style="border-spacing:20px 0px">
                            <tr>
                                <text style="color:black;font-size:30px;">
                                    <a id="diyDisplay">DIY MOSHI&#178; BOWLS</a>                              
                                </text></br></br>
                                <text>Dig into our antioxidant-rich, guilt-free sweet treats!</text>
                            </tr>
                            <table id="diyItems">
                            </table>
                        </table>
                    </div></br>

                    <div id="acaiDisplay" style="width:800px;margin-top:100px">
                        <table style="border-spacing:20px 0px">
                            <tr>
                                <text style="color:black;font-size:30px;">
                                    <a id="acaiDisplay">ACAI</a>                              
                                </text></br></br>
                                <text>Hydrate yourself with any of our beverages!</text>
                            </tr>
                            <table id="acaiItems">
                            </table>
                        </table>
                    </div></br>

                    <div id="beveragesDisplay" style="width:800px;margin-top:100px">
                        <table style="border-spacing:20px 0px">
                            <tr>
                                <text style="color:black;font-size:30px;">
                                    <a id="beveragesDisplay">BEVERAGES</a>                              
                                </text></br></br>
                                <text>Build your own exclusively now!</text>
                            </tr>
                            <table id="beveragesItems">
                            </table>
                        </table>
                    </div></br>
                </div>    
            </div>
        </form>
    </body>
</html>