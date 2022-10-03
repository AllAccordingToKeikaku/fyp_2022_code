<?php

?>
<!DOCTYPE html>
<html>
    <script>        
        var isProfileClicked = false;
        function inboxClick(){
            alert("You clicked on inbox");
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
    </script>
    <style>
        .buttonEffects {
          border-radius: 15px;
          white-space: normal;
          background-color: #437E96;
          border: none;
          color: white;
          width: 140px;
          height: 70px;
          font-size: 20px;
          text-align: center;
          display: inline-block;
          float: left;
        }
        .buttonEffects:hover {
                border: 2px solid black;
                cursor:pointer;
        }

        .arrow {
            border: solid black;
            border-width: 0 1px 1px 0;
            display: inline-block;
            padding: 3px;
        }
    </style>
    <body>
        <form>
            <div style="width:1100px;margin-left:auto;margin-right:auto">
                <div style="float:right">
                    <img src="/fyp_codes/MoshiQ2 Assets/Profile Icon.png" style="display:block;margin-left:auto;width:70px;height:auto" onclick="profileClicked()"></br>
                    <div id="displayProfile" name="displayProfile" hidden>
                        <span style="margin-right:100px">*Account Name*</span></br>
                        <input type="button" id="accountDrop" name="accountDrop" value="Account &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&#x25B2;" style="color:gray;margin-left:10px;margin-top:5px;height:30px;" onclick="clickedDrop()">
                        <input type="button" id="accountCollapse" name="accountCollapse" value="Account &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&#x25BC;" style="color:gray;margin-left:10px;margin-top:5px;height:30px;" onclick="clickedCollapse()" hidden>
                        <input type="button" id="accountSignOut" name="accountSignOut" value="Sign out &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;" style="margin-left:10px;margin-right:auto;margin-top:5px;width:188px;height:30px;" onclick="signOut()" hidden>
                    </div>
                </div>
                <div>
                    <img src="/fyp_codes/MoshiQ2 Assets/Logo.png" style="margin-left:0px;width:500px;height:200px;display:block"></br>
                </div>
                    <span style="margin-left:auto;margin-right:auto;width:600px;font-size:50px;display:block">Greetings Admin</span>     
                <div>                    
                    <span style="float:left;margin-left:100px;width:100px;margin-top:30px;font-size:50px;display:block">Email</span>    
                    <input type="button" class="buttonEffects" id="emailButton" name="emailButton" value="Inbox" style="margin-left:100px;margin-top:30px" onclick="inboxClick()">  
                </div>
                <div style="margin-top:160px;">
                    <span style="margin-left:100px;width:100px;font-size:50px;display:block">Roles</span></br>
                    <input type="button" class="buttonEffects" id="createUserProfileButton" name="createUserProfileButton" value="Create user profile" style="margin-left:100px;">
                    <input type="button" class="buttonEffects" id="viewUserProfileButton" name="viewUserProfileButton" value="View user profile" style="margin-left:60px;">
                    <input type="button" class="buttonEffects" id="suspendUserProfileButton" name="suspendUserProfileButton" value="Suspend user profile" style="margin-left:60px;">
                    <input type="button" class="buttonEffects" id="updateUserProfileButton" name="updateUserProfileButton" value="Update user profile" style="margin-left:60px;">
                </div>
                <div style="margin-top:120px;">
                    <span style="margin-left:100px;width:100px;font-size:50px;display:block">Accounts</span></br>
                    <input type="button" class="buttonEffects" id="createUserAccountButton" name="createUserAccountButton" value="Create user account" style="margin-left:100px;">
                    <input type="button" class="buttonEffects" id="viewUserAccountButton" name="viewUserAccountButton" value="View user account" style="margin-left:60px;">
                    <input type="button" class="buttonEffects" id="suspendUserAccountButton" name="suspendUserAccountButton" value="Suspend user account" style="margin-left:60px;">
                    <input type="button" class="buttonEffects" id="updateUserAccountButton" name="updateUserAccountButton" value="Update user account" style="margin-left:60px;">
                </div>
            </div>
        </form>
    </body>
</html>