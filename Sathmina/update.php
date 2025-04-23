    <?php

    require 'config.php';



    $prescriptionID = $_POST ['prescriptionID'];
    $preQty = $_POST ['preQty'];
    $issuedDate = $_POST['issuedDate'];
    $medicationID = $_POST['medicationID']; 
    $customerID = $_POST['customerID'];

    if (empty($prescriptionID) || empty($preQty) || empty($issuedDate)|| empty($medicationID)||empty($customerID)){
        echo "All Fields Required";

    }
    else {

        $updateSQL = "UPDATE prescription set  Pre_Qty = '$preQty', Issued_Date= '$issuedDate', Medication_ID = '$medicationID',Customer_ID = '$customerID' WHERE Prescription_ID='$prescriptionID'"; 


    }

    if ($conn->query($updateSQL) === TRUE) {
        echo "Update Successful";
    } else {
        echo "Error updating record: " . $conn->error;
    };

    ?>


    