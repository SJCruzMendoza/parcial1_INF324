<link rel="stylesheet" href="css/logincss.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">

<form action="ingresa.php" method="post" >  
<div class="container mt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <div class="card px-5 py-5" id="form1">
                <div class="form-data" >
                    <div class="forms-inputs mb-4"> <span>Usuario</span> <input autocomplete="off" type="text" name="usuario">                        
                    </div>

                    <div class="forms-inputs mb-4"> <span>Password</span> <input autocomplete="off" type="password" name="pass">
                    
                    </div>
                    <div class="mb-3"> <button v-on:click.stop.prevent="submit"
                            class="btn btn-dark w-100">Login</button> 
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</form>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js">

    <script src="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">