<form action="../app.php" method="POST" enctype="multipart/form-data">
    <div class="campain_info">
        <div class="text-center">
            <h2>CREATE CAMPAIGN</h2>
            <hr>
        </div>
        <div>
            <div class="objectives">
                <h3 id="subhead">BASIC INFORMATION</h3>
                <p>Campaign Title</p>
                <p>
                    <input type="text" name="campaignTitle" id="title">
                </p>
                <div>
                    <p>Campain Goal</p>
                    <p><input type="number" name="campaignGoal" id="campain_goal" required></p>
                </div>
                <div>
                    <p>Target Donors</p>
                    <p><input type="number" name="targetDonors" id="campain_goal" required></p>
                </div>
                <p>Your core objectives</p>
                <p>1. <input type="text" name="objective1" id="objective1" required></p>
                <p>2. <input type="text" name="objective2" id="objective2" required></p>
                <p>3. <input type="text" name="objective3" id="objective3" required></p>
            </div>
            <div class="campaignFiles">
                <div>
                    <h3 id="subhead">CAMPAIGN FILES</h3>
                </div>
                <div class="flex_item">
                    <div>
                        <p>Campaign Logo</p>
                        <p><input type="file" name="campaignLogo" id=""></p>
                    </div>
                    <div class="page_image">
                        <p>Page image</p>
                        <p><input type="file" name="campaignImage" id="image" required></p>
                    </div>
                    <div class="page_image">
                        <p>Share video</p>
                        <p><input type="file" name="campaignVideo" id="image" required></p>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="summary">
                <div>
                    <h3 id="subhead">CAMPAIGN DETAILS</h3>
                </div>
                <p>Campaign summary</p>
                <textarea name="campaignSummary" id="summary" rows="10" placeholder="write here"></textarea>
                <p>Challenge To be Solved</p>
                <p><textarea name="campaignChallenge" id="challenge" rows="10" placeholder="write here"></textarea></p>
                <p>Solution</p>
                <textarea name="campaignSolution" id="summary" rows="10" placeholder="write here"></textarea>
                <p>Share a Thanks in advance to donors</p>
                <textarea name="campaignWord" id="summary" rows="10" placeholder="write here"></textarea>
            </div>
        </div>
        <button class="btn btn-success" name="campaign">Submit</button>
    </div>

</form>