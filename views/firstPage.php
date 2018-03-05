<div id="main" class="main-content">
    <h1 class="heading-xlarge">Create a new user</h1>
    <p class="heading-text">Complete the fields below to create a new user</p>
    <form action="./controller/saveUser.php" method="POST">
        <div class="form-group">
            <label for="_txtUserName" class="form-label">User name</label>
            <input type="text" class="form-control" name="username" id="_txtUserName"/>
        </div>
        <div class="form-group">
            <label for="_txtEmail" class="form-label">Email address</label>
            <input type="text" class="form-control" name="useremail" id="_txtUserEmail"/>
        </div>
        <fieldset>
            <div class="multiple-choice">
                <input id="_chkAdmin" name="admin" type="checkbox" value="1"/>
                <label class="form-label" for="_chkAdmin">Admin user</label>
            </div>
        </fieldset> 
        <br/>
        <div class="form-group">
            <button type="submit" class="button">Save and continue</button>
        </div>
    </form>
</div>