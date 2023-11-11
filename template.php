
<?php 
/**
 * The logic for the database
 */

function get_form($csrf_token){
    return "
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css' integrity='sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N' crossorigin='anonymous'>
    
        <div class='container' id='register-form'>

            <form action='' method='post'>
            <input class='hidden' type='hidden 'name='csrf_token' value='$csrf_token'>

                <div class='form-group'>
                    <label for='firstName'>نام</label>
                    <input required type='text' class='form-control' id='firstName' name='firstName' placeholder='نام خود را وارد کنید'>
                </div>
                <div class='form-group'>
                    <label for='lastName'>نام خانوادگی</label>
                    <input required type='text' class='form-control' id='lastName' name='lastName' placeholder='نام خانوادگی خود را وارد کنید'>
                </div>
                <div class='form-group'>
                    <label for='phoneNumber'>شماره موبایل</label>
                    <input required type='tel' class='form-control' id='phoneNumber' name='phoneNumber' >
                </div>
                <div class='form-group'>
                    <label for='field'>زمینه</label>
                    <input required type='text' class='form-control' id='field' name='field' placeholder='در چه زمینه ای منتورینگ لازم دارید؟'>
                </div>
                <div class='form-group'>
                    <label for='email'>ایمیل</label>
                    <input required type='email' class='form-control' id='email' name='email' >
                </div>
                    <div class='form-group'>
                    <textarea class='form-control' id='exampleFormControlTextarea1' rows='5' placeholder='توضیحات'></textarea>
                </div>
                <button type='submit' class='btn btn-primary'>Submit</button>
            </form>
        </div>

        <!-- Include Bootstrap JS and jQuery -->
        <script src='https://code.jquery.com/jquery-3.5.1.slim.min.js'></script>
        <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js'></script>
        <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'></script>
    ";
}
?>