
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <center>Add Student Data</center>
        <form name="frm" onsubmit="AddData(event)">
            <table border="1">
                <tr>
                    <td>Name</td>
                    <td>
                        <input type="text" id="name" name="name"/>
                    </td>
                </tr>
                <tr>
                    <td>Class</td>
                    <td>
                        <input type="text" id="cls" name="cls"/>
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>
                        <input type="email" id="email" name="email"/>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="btnsub" value="Submit"/> 
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>

<script>
    function AddData(e)
    {
       e.preventDefault();
        let name = document.forms['frm']['name'].value;
        let email = document.forms["frm"]["email"].value;
        let cls = document.forms["frm"]["cls"].value;
        var obj = {
            name:name,
            email:email,
            cls:cls,
        }
        
        console.log(obj);
        
        fetch("AddDataAPI.php",
        {
            method:'POST',
            body:JSON.stringify(obj),
            headers:{
                'Content-Type':'application/json',
            },
            
        })
        .then((response)=>response.json())
        .then((data)=>{
            console.log(data);
            
        })
        .catch((error)=>{
            console.log(error);
            
        })
    }
    

</script>

<style>
    
    table 
    {
        margin-left: auto;
        margin-right: auto;
    }
</style>