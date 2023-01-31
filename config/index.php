<?php
class Btc 
{    
    private $host = 'localhost';
    private $username = 'natingnj_btc';
    private $password = 'Primestar1$';
    private $database = 'natingnj_btc';
 
    protected $connection;
 
    public function __construct(){
 
        if (!isset($this->connection)) {
 
            $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
 
            if (!$this->connection) {
                //echo 'Cannot connect to database server';
                exit;
            }            
        }    
 
        return $this->connection;
    }
    
    public function email_validation($str) {
    	return (!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $str))
        ? FALSE : TRUE;
	}

	//register
    public function signup()
    {
    	if (isset($_POST['submit'])) {
    		if ((empty($_POST["username"])) || (empty($_POST["email"]))
    		|| (empty($_POST["phone"]))
	    	|| (empty($_POST["pass1"]))
	    	|| (empty($_POST["pass2"]))
	    	|| (empty($_POST["secret1"]))
	    	|| (empty($_POST["secret2"]))) {
	    		return "<p class='alert alert-danger'>! Please enter all required field</p>";
    		}else{
				// Function call
				if(!$this->email_validation($_POST["email"])) {
				    return "<p class='alert alert-danger'>! Invalid email address.</p>";
				}elseif (!is_numeric($_POST["phone"])) {
				    return "<p class='alert alert-danger'>! Invalid phone number</p>";
				}
				else {
		    		$username = $this->test_input($_POST["username"]);
		    		$email = $this->test_input($_POST["email"]);
		    		$tel = $this->test_input($_POST["phone"]);
		    		$pass1 = $this->test_input($_POST["pass1"]);
		    		$pass2 = $this->test_input($_POST["pass2"]);
		    		$secret1 = $this->test_input($_POST["secret1"]);
		    		$secret2 = $this->test_input($_POST["secret2"]);

		    		if ($pass1 !== $pass2 ) {
				    return "<p class='alert alert-danger'>! Password not matched</p>";
		    		}
		    		elseif ($secret1 !== $secret2) {
				    return "<p class='alert alert-danger'>! Secret key not matched</p>";
		    		}
		    		else{
			    		$check = mysqli_query($this->connection, "SELECT * FROM user_record WHERE username ='$username' || email='$email'");
			    		if (mysqli_num_rows($check)>0) {
			    			return "<p class='alert alert-danger'>! User already exist</p>";
			    		}else{
			    			$address="0xA".md5($email);
			    			$tel_number = $code."$tel";
			    			$query = mysqli_query($this->connection,
			    			 "INSERT INTO user_record(username,email,password,skey,wallet_bal,tel,verify,wallet_address,isVip)
			    			  VALUES('$username', '$email', '$pass1', '$secret1','0','$tel_number','1','','0')");	
			    			if($query){
				    			return "<p class='alert alert-success'>Registration Successful</p>";
			    			}else{
				    			return "<p class='alert alert-warning'> Error parsing data, please try again !</p>";
			    			}		    		
			    		}
		    		}
				}
    		}
    	}	
    }

    //login
    public function login(){
    	session_start();
    	if (isset($_POST["login"])) {
    		if (empty($_POST["email"]) || empty($_POST["password"])) {
    			return "<p class='alert alert-danger'>field cannot be empty !</p>";
    		}else{
    			$email = $this->test_input($_POST["email"]);
    			$password = $this->test_input($_POST["password"]);
    			$check = mysqli_query($this->connection,
    			 "SELECT * FROM user_record WHERE email = '$email'");
    			if (mysqli_num_rows($check)<1) {
    				return "<p class='alert alert-danger'>Invalid credentials !!</p>";
    			}else{
    				$data = mysqli_fetch_object($check);
    				$pass = $data->password;
    				$status = $data->verify;
    				if (($pass === $password)) {
    					if ($status == "1") {
    						$_SESSION['uid']=$email;
    						return "<script>window.location.href='dashboard.php';</script>";
    					}else{
    						return "<p class='alert alert-danger'>Email veification failed</p>";
    					}
    				}else{
    					return "<p class='alert alert-danger'>Invalid credentials !!</p>";
    				}
    			}
    		}
    	}
    }

    //adminLogin
    public function adminLogin()
    {
    	session_start();
    	if (isset($_POST["admin"])) {
    		if (empty($_POST["email"]) || empty($_POST["password"])) {
    			return "<p class='alert alert-danger'>field cannot be empty !</p>";
    		}else{
    			$email = $this->test_input($_POST["email"]);
    			$password = $this->test_input($_POST["password"]);
    			$check = mysqli_query($this->connection,
    			 "SELECT * FROM admin WHERE username = '$email'");
    			if (mysqli_num_rows($check)<1) {
    				return "<p class='alert alert-danger'>Invalid credentials.. !!</p>";
    			}else{
    				$data = mysqli_fetch_object($check);
    				$pass = $data->password;
    				$mypass = md5($password);
    				if (($mypass === $pass)) {
    					$_SESSION['admin_uid']=$email;
    					echo "<script>window.location.href='welcome.php';</script>";
    					
    				}else{
    					return "<p class='alert alert-danger'>Invalid credentials !!</p>";
    				}
    			}
    		}
    	}
    }

    //userprofile
    public function user(){
    	//get user data
    	if (isset($_SESSION['uid'])) {
    		$current_user = $_SESSION['uid'];
    		$query = mysqli_query($this->connection, "SELECT * FROM user_record WHERE email='$current_user'");
    		//check if user if deleted
    		if (mysqli_num_rows($query)<1) {
    			return "<script>window.location.href='login.php';</script>";
    		}else{
    			$data = mysqli_fetch_object($query);
    			return $data;
    		}
    	}else{
    		return "<script>window.location.href='login.php';</script>";
    	}
    }

    //proof of payment

    public function proof(){
    	if (isset($_FILES['paymentProof'])) {
    		$allow_ext = array('png','jpg','gif','jpeg','bmp','tif');
    		$allow_type = array('image/png','image/gif','image/jpeg','image/bmp','image/tiff');
		    $image_name = $_FILES['paymentProof']['name'];
		    $image_type = getimagesize($_FILES['paymentProof']['tmp_name']);
		    $image_name = explode('.',$image_name);
		    $ext = end($image_name);

			$filename = "PROOF".rand(0001, 9999).time().".".$ext;
			$target_dir = "../uploads/";
			$target_file = $target_dir . $filename;
			$amount = $_POST['amount'];
			$username = $_SESSION['uid'];
			if (in_array($ext, $allow_ext) && in_array($image_type['mime'], $allow_type)) {
				if (move_uploaded_file($_FILES["paymentProof"]["tmp_name"], $target_file)) {
					if (is_numeric($_POST["amount"])) {
    					$check= mysqli_query($this->connection, "SELECT * FROM user_record WHERE email='$username'");
    					if (mysqli_num_rows($check)<1) {
							echo "<script>window.location.href='login.php';</script>";
    					}else{
							$query = mysqli_query($this->connection, "INSERT INTO deposit(username,amount,proof	,status,datePosted)VALUES('$username','$amount','$filename','0',now())");
							if ($query) {
								echo "<script>alert('File Uploaded Successfully');</script>";
								echo "<script>window.location.href='dashboard.php';</script>";
							}else{
								echo "<p class='alert alert-danger'><i class='fa fa-exclamation-triangle'></i><b>Sorry,</b> There was an error uploading your image, try again</p>";
								//echo mysqli_error($this->connection);						
							}
    					}
					}else{
						echo "<p class='alert alert-danger'><i class='fa fa-exclamation-triangle'></i><b>Sorry,</b> Only numbers is allowed</p>";
					}
				}else{
					echo "<p class='alert alert-danger'><i class='fa fa-exclamation-triangle'></i><b>Sorry,</b> There was an error uploading your image, try again</p>";
				}
			}else{
				echo "<p class='alert alert-danger'><i class='fa fa-exclamation-triangle'></i><b>Error,</b> File is not a valid image.</p>";
			}
    	}
    }

    //withdraw 

    public function withdraw(){
	    	if (isset($_POST["withdraw"])) {
	    		$username=$_SESSION['uid'];
	    		$amount = floatval($_POST["amount"]);
	    		$skey = $_POST['key'];
	    		$check= mysqli_query($this->connection, "SELECT * FROM user_record WHERE email='$username'");
	    		if (mysqli_num_rows($check)<1) {
	    			echo "<script>window.location.href='login.php';</script>";
	    		}else{
	    			if (is_numeric($amount)) {
		    			$data = mysqli_fetch_object($check);
		    			$balance= floatval($data->wallet_bal);
		    			$myaddr = $data->wallet_address;
		    			$key = $data->skey;
		    			if ($key===$skey) {
			    			if ($balance != 0 && $amount <=$balance) {
			    				$new_balance = $balance - $amount;
			    				$query = mysqli_query($this->connection, "UPDATE user_record SET wallet_bal='$new_balance' WHERE email='$username' LIMIT 1");
			    				if ($query) {
			    					//insert in history
			    					$history = mysqli_query($this->connection,"INSERT INTO withdraw(username,amount,oldBal,addr,status)VALUES('$username','$amount','$balance','$myaddr','0')");
			    					if ($history) {
			    						//make history
			    						$makeHistory = mysqli_query($this->connection, "INSERT INTO history(sender,receiver,amount,tr_type,datePosted)VALUES('$username','$receiver','$amount','withdraw',now() )");
			    						if ($makeHistory) {
				    						echo "<script>alert('Your withdraw has been processed');</script>";
				    						echo "<script>window.location.href='dashboard.php';</script>";
			    						}else{
						    				return "<p class='alert alert-danger'><i class='fa fa-exclamation-triangle'></i><b>Error,</b> Something went wrong</p>";
			    						}
			    					}else{
					    				return "<p class='alert alert-danger'><i class='fa fa-exclamation-triangle'></i><b>Error,</b> Something went wrong</p>";
			    					}
			    				}else{
				    				return "<p class='alert alert-danger'><i class='fa fa-exclamation-triangle'></i><b>Error,</b> Something went wrong</p>";
			    				}
			    			}else{
			    				return "<p class='alert alert-danger'><i class='fa fa-exclamation-triangle'></i><b>Error,</b> Insufficient funds, click <a href='recharge.php'>here</a> to recharge</p>";
			    			}
		    			}else{
		    				return "<p class='alert alert-danger'><i class='fa fa-exclamation-triangle'></i><b>Error,</b> Invalid credentials</p>";
		    			}
	    			}else{
	    				return "<p class='alert alert-danger'><i class='fa fa-exclamation-triangle'></i><b>Error,</b> Invalid amount</p>";
	    			}
	    		}
	    	}
    }

  

    //transfer
    public function transfer(){
    	if (isset($_POST["transfer"])) {
    		$amount = $_POST["amount"];
    		$receiver = $_POST["receiver"];
    		$fee = $_POST["fee"];
    		$username = $_SESSION['uid'];
    		//check if user is not sending to himself
    		$check= mysqli_query($this->connection, "SELECT * FROM user_record WHERE email='$username'");
    		if (mysqli_num_rows($check)==0) {
    			echo mysql_error($this->connection);
    		}else{
    			$data = mysqli_fetch_object($check);
    			$uname=$data->username;
    			if ($uname == $receiver) {
    				return "<p class='alert alert-danger'> <i class='fa fa-exclamation-triangle'></i><b>Error,</b> Something went wrong</p>";
    			}else{
	    			//get receiver data
	    			$getReceiver = mysqli_query($this->connection, "SELECT * FROM user_record WHERE username='$receiver' || email='$receiver'");
	    			if (mysqli_num_rows($getReceiver)<1) {
	    				return "<p class='alert alert-danger'> <i class='fa fa-exclamation-triangle'></i><b>Error,</b> No user was found</p>";
	    			}else{
	    				$receiverData = mysqli_fetch_object($getReceiver);
	    				$isVip= $receiverData->isVip;
	    				$rbal = $receiverData->wallet_bal;
	    				if ($isVip == "0") {
	    					return "<p class='alert alert-danger'> <i class='fa fa-exclamation-triangle'></i><b>Error,</b> Account must be Vip</p>";
	    				}else{
	    					$senderBal = $data->wallet_bal;
	    					if ( floatval($amount) <= floatval($senderBal) && floatval($amount) != 0 ) {
	    						$newSenderBal = floatval($senderBal) - floatval($amount);
	    						$receiverNewBal = floatval($rbal) + floatval($amount); 
    							$send = mysqli_query($this->connection, "UPDATE user_record SET wallet_bal='$newSenderBal' WHERE email='$username'");
    							if ($send) {
    								$send2 = mysqli_query($this->connection, "UPDATE user_record SET wallet_bal='$receiverNewBal' WHERE username='$receiver'");
    								if ($send2) {
    									// make history
    									$history = mysqli_query($this->connection, "INSERT INTO history(sender,receiver,amount,tr_type,datePosted)VALUES('$username','$receiver','$amount','transfer',now() )");
    									if ($history) {
				    						echo "<script>alert('Your transfer has been processed');</script>";
				    						echo "<script>window.location.href='dashboard.php';</script>";
    									}else{
    										return "<p class='alert alert-danger'> <i class='fa fa-exclamation-triangle'></i><b>Error,</b> Something went wrong</p>";
    									}
    								}else{
    									return "<p class='alert alert-danger'> <i class='fa fa-exclamation-triangle'></i><b>Error,</b> Something went wrong</p>";
    								}
    							}else{
    								return "<p class='alert alert-danger'> <i class='fa fa-exclamation-triangle'></i><b>Error,</b> Something went wrong</p>";
    							}
	    					}else{
	    						return "<p class='alert alert-danger'> <i class='fa fa-exclamation-triangle'></i><b>Error,</b> Insufficient funds</p>";
	    					}
	    				}
	    			}
    			}
    		}

    	}
    }

    //get history
    public function getHistory()
    {
    	$data=null;
    	$query = mysqli_query($this->connection,"SELECT * FROM history ORDER BY id DESC LIMIT 20");
    	if (mysqli_num_rows($query)<1) {
    		return "No data";
    	}else{
    		while ($row = mysqli_fetch_object($query)) {
    			$data[] = $row;
    		}
    		return $data; 
    	}
    }

    //get current user history
    public function getAuthHistory()
    {   $username = $_SESSION["uid"];
        $getReceiver = mysqli_query($this->connection, "SELECT * FROM user_record WHERE email =$username");
        $udata = mysqli_fetch_object($getReceiver);
        $uname = $udata->username;
    	$data=null;
    	$query = mysqli_query($this->connection,"SELECT * FROM history  ORDER BY id DESC LIMIT 20");
    	if (mysqli_num_rows($query)<1) {
    		return "No data";
    	}else{
    		while ($row = mysqli_fetch_object($query)) {
    			$data[] = $row;
    		}
    		return $data; 
    	}
    }

    //get all users
    public function allUser()
    {
    	$data=null;
    	$query = mysqli_query($this->connection,"SELECT * FROM user_record ORDER BY id DESC");
    	if (mysqli_num_rows($query)<1) {
    		return "No data";
    	}else{
    		while ($row = mysqli_fetch_object($query)) {
    			$data[] = $row;
    		}
    		return $data; 
    	}
    }

    //get all deposits
    public function alldeposit()
    {
    	$data=null;
    	$query = mysqli_query($this->connection,"SELECT * FROM deposit ORDER BY id DESC");
    	if (mysqli_num_rows($query)<1) {
    		return "No data";
    	}else{
    		while ($row = mysqli_fetch_object($query)) {
    			$data[] = $row;
    		}
    		return $data; 
    	}
    }

    //approve deposit

    public function approveDeposit(){
    	if(isset($_GET['approve'])){
    		$id = $_GET['approve'];
    		$getUser = mysqli_query($this->connection, "SELECT * FROM deposit WHERE id ='$id'");
    		//get the user data
    		$data = mysqli_fetch_object($getUser);
    		$status = $data->status;

    		if ($status =="0") { 
    		   	$username = $data->username;
	    		$depositedAmount = floatval($data->amount);
	    		// return var_dump($depositedAmount);

	    		//get old wallet_bal
	    		$wallet = mysqli_query($this->connection, "SELECT * FROM user_record WHERE email='$username'");
	    		$user = mysqli_fetch_object($wallet);
	    		$oldbalance = floatval($user->wallet_bal);
	    		//new balance
	    		$newBalance = $oldbalance + $depositedAmount;
	    		//update wallet balance
	    		$updBal = mysqli_query($this->connection, "UPDATE user_record SET wallet_bal='$newBalance' WHERE email='$username'");
	    		if ($updBal) {
	    			//make history
	    			$history = mysqli_query($this->connection, "INSERT INTO history(sender,receiver,amount,tr_type,datePosted)VALUES('$username','self','$depositedAmount','deposit',now() )");
	    			if ($history) {
	    				$status = mysqli_query($this->connection, "UPDATE deposit SET status='1' WHERE id='$id'");
	    				if ($history) {
	    					return "updated";
	    				}else{
	    					return "Error parsing data";
	    				}
	    			}else{
	    				return "Error parsing data";
	    			}
	    		}else{
	    			return "Error parsing data";
	    		}
    		}else{
    			return "...";
    		}
    		//return var_dump( $oldbalance);
    	}
    }

    //update user balance

    public function updateBalance(){}

    //upgrade level

    public function upgrade(){
    	if (isset($_GET["upgrade"])) {
    		$level = intval($_GET['upgrade']);
    		$list =[1,2,3,4,5];

    		$result = in_array($level, $list);
    		//return var_dump($result);
    		if($result){
    			$username = $_SESSION['uid'];
    			$getBal = mysqli_query($this->connection, "SELECT * FROM user_record WHERE email='$username'");
    			if (mysqli_num_rows($getBal)>0) {
    				$data = mysqli_fetch_object($getBal);
    				$oldLevel = intval($data->isVip);
    				$userBalance= floatval($data->wallet_bal);
    				$levelchoice=null;
    				$levelamt=null;
    			    if($level > $oldLevel){
    			        	if ($level == 1) {
    					if ($userBalance >= 100) {
    						$levelchoice = $userBalance - 100;
    						$levelamt = 100;
    					}else{
    						return "<p class='alert alert-danger'> <i class='fa fa-exclamation-triangle'></i><b>Error,</b> Insufficient funds</p>";
    					}
    				}
    				elseif ($level == 2) {
    					if ($userBalance >= 1000) {
    						$levelchoice = $userBalance - 1000;
    						$levelamt =1000;
    					}else{
    						return "<p class='alert alert-danger'> <i class='fa fa-exclamation-triangle'></i><b>Error,</b> Insufficient funds</p>";
    					}
    				}
    				elseif ($level == 3) {
    					if ($userBalance >= 3000) {
    						$levelchoice = $userBalance - 3000;
    						$levelamt = 3000;
    					}else{
    						return "<p class='alert alert-danger'> <i class='fa fa-exclamation-triangle'></i><b>Error,</b> Insufficient funds</p>";
    					}
    				}
    				elseif ($level == 4) {
    					if ($userBalance >= 20000) {
    						$levelchoice = $userBalance - 20000;
    						$levelamt = 20000;
    					}else{
    						return "<p class='alert alert-danger'> <i class='fa fa-exclamation-triangle'></i><b>Error,</b> Insufficient funds</p>";
    					}
    				}
    				elseif ($level == 5) {
    					if ($userBalance >= 150000) {
    						$levelchoice = $userBalance - 150000;
    						$levelamt = 150000;
    					}else{
    						return "<p class='alert alert-danger'> <i class='fa fa-exclamation-triangle'></i><b>Error,</b> Insufficient funds</p>";
    					}
    				}


    				else{
    					return "<p class='alert alert-danger'> <i class='fa fa-exclamation-triangle'></i><b>Error,</b> Something went wrong</p>";
    				}
    			    }else{
    					return "<p class='alert alert-danger'> <i class='fa fa-exclamation-triangle'></i><b>Error,</b> Failed</p>";}
    			}else{
    				echo "<script>window.location.href='../';</script>";
    			}
    		}else{
    			return "<p class='alert alert-danger'> <i class='fa fa-exclamation-triangle'></i><b>Error,</b> Something went wrong</p>";
    		}
    			$processLevel = mysqli_query($this->connection, "UPDATE user_record SET wallet_bal='$levelchoice', isVip='$level' WHERE   email='$username'");
    			if ($processLevel) {
    				$history = mysqli_query($this->connection, "INSERT INTO history(sender,receiver,amount,tr_type,datePosted)VALUES('$username','self','$levelamt','upgrade',now() )");
    				if ($history) {
    					echo "<script>alert('Membership Upgrade successful');</script>";
    					return "<script>window.location.href='dashboard.php';</script>";
    				}else{
    					return "<p class='alert alert-danger'> <i class='fa fa-exclamation-triangle'></i><b>Error,</b> Something went wrong</p>";
    				}
    			}else{
    				return "<p class='alert alert-danger'> <i class='fa fa-exclamation-triangle'></i><b>Error,</b> Something went wrong</p>";
    			}
    	}
    }
    
    //add new wallet address
    
    public function newWallet(){
        if(isset($_POST["newwallet"])){
            $username= $_SESSION["uid"];
            if($_POST["addr"] == ""){
                return "<p class='alert alert-danger'> <i class='fa fa-exclamation-triangle'></i><b>Error,</b> Something went wrong</p>";
            }else{
                $addr = $this->test_input($_POST["addr"]);
                $query = mysqli_query($this->connection, "UPDATE user_record SET wallet_address='$addr' WHERE email ='$username' LIMIT 1");
                if($query){
                    return "<script>alert('Wallet Address Saved');</script>";
                }else{
                    return "<p class='alert alert-danger'> <i class='fa fa-exclamation-triangle'></i><b>Error,</b> Something went wrong</p>";
                }
            }
        }
    }
    //validate function
    public function test_input($data) {
		$data = trim($data);
	  	$data = stripslashes($data);
	  	$data = htmlspecialchars($data);
	  	return $data;
	}
	
	//manualHistory
	public function manualHistory(){
	    if(isset($_POST["manualHistory"])){
	        $sender = $_POST["sender"];
	        $receiver = $_POST["receiver"];
	        $amount = $_POST["amount"];
	        $mtype = $_POST["mtype"];
	        $query = mysqli_query($this->connection, "INSERT INTO history(sender, receiver, amount, tr_type,datePosted)VALUES('$sender','$receiver', '$amount','$mtype',now())");
	        if($query){
	            return "<script>alert('Success');</script>";
	        }else{
	            return "<script>alert('Success');</script>";
	            
	        }
	    }
	}
}
?>