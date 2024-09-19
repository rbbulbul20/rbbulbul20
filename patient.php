<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phone Number Input</title>
    <style>
        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);
            padding-top: 60px;
        }
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 300px;
            text-align: center;
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 60vh;
            margin: 0;
            background-color: #f8f9fa;
            padding: 2rem;
        }

        .input-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            max-width: 400px; 
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 0.5rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            box-sizing: border-box; 
            top: 50px;
        }

        h3 {
            margin-bottom: 1rem;
            color: #333;
            font-size: 1.25rem;
            text-align: center;
        }

        #phoneInput {
            padding: 0.75rem;
            width: 100%;
            font-size: 1rem;
            border: 1px solid #ced4da;
            border-radius: 0.375rem;
            margin-bottom: 1rem;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
        }

        #phoneInput:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.25);
        }

        button {
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            border: none;
            border-radius: 0.375rem;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
            width: 100%;
            box-sizing: border-box;
        }

        button:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }

        button:focus {
            outline: none;
            box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.25);
        }
    </style>
    <script>
        function redirectToStudentAttendance() {
            const phoneNumber = document.getElementById('phoneInput').value;
            const modal = document.getElementById('myModal');
            const modalText = document.getElementById('modalText');

            if (!phoneNumber) { // Check if the input is empty
                modalText.innerText = 'Phone number is required.';
                modal.style.display = "block"; // Show the modal
                return; // Exit the function if the input is empty
            }

            const baseUrl = 'http://0.0.0.0:4575/patient_list.php';
            const url = `${baseUrl}?phone=${phoneNumber}`;
            window.location.href = url;
        }

        function closeModal() {
            document.getElementById('myModal').style.display = "none";
        }

        // Close modal if clicked outside of it
        window.onclick = function(event) {
            const modal = document.getElementById('myModal');
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</head>
<body>
    <h4>এখানে হাসপাতাল বা ক্লিনিকের রেজিষ্ট্রেশন ফোন নাম্বার প্রবেশ করুন।</h4>
    <div class="input-container">
        <input type="tel" id="phoneInput" maxlength="11" pattern="\d{11}" placeholder="Enter phone number" required>
        <button onclick="redirectToStudentAttendance()">Go</button>
    </div>

    <!-- The Modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <p id="modalText"></p>
        </div>
    </div>
</body>
</html>