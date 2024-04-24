<?php
session_start();
include 'mylib.php';
?>
<!--Filename: about.php
	Purpose: about page for FashionFinder prototype -->
<!DOCTYPE html>
<html lang="en">
<body>

    <?php include 'elements/header.php'; ?>
    
    <div class="row">
    <div class="column" style="color: #E0FF4F;">
        <h2>Shannen Cawley</h2>
        <p>Backend Developer - API</p>
        <img src="https://upload.wikimedia.org/wikipedia/commons/8/89/Portrait_Placeholder.png" alt="Shannen Pic" width="100%" height="100%">
    </div>
    <div class="column" style="color: #E0FF4F;">
        <h2>Eve Collier</h2>
        <p>Backend Developer - API</p>
        <img src="https://upload.wikimedia.org/wikipedia/commons/8/89/Portrait_Placeholder.png" alt="Eve Pic" width="100%" height="100%">
    </div>
    <div class="column" style="color: #E0FF4F;">
        <h2>Estella Mercado</h2>
        <p>Database - Social Media</p>
         <img src="https://upload.wikimedia.org/wikipedia/commons/8/89/Portrait_Placeholder.png" alt="Estella Pic" width="100%" height="100%">
    </div>
    <div class="column" style="color: #E0FF4F;">
        <h2>Kate Fedotova</h2>
        <p>UI/UX Developer</p>
         <img src="https://upload.wikimedia.org/wikipedia/commons/8/89/Portrait_Placeholder.png" alt="Kate Pic" width="100%" height="100%">
    </div>
    </div>
	
	<?php include 'elements/loginPopUp.php'; ?>
	<?php include 'elements/footer.php'; ?>
</body>
</html>
