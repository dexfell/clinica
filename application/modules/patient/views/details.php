<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <section class="panel">
            <!-- page start-->
            <div class="row">
                <aside class="profile-nav col-lg-3">
                    <section class="panel">
                        <div class="user-heading round">
                            <a>
                                <img src="<?php echo $patient->img_url ?>" alt="">
                            </a>
                            <h1><?php echo $patient->name ?></h1>
                         <!--   <p><?php echo $patient->email ?></p> -->
                        </div>
                    </section>
                </aside>
                <aside class="profile-info col-lg-9">
                    <section class="panel">
                        <div class="bio-graph-heading">
                            Doctor : <?php echo $patient->doctor; ?>
                        </div>
                        <div class="bio-graph-info">
                            <h1>Expediente</h1>
                            <div class="row">
                                <div class="bio-row">
                                    <p><span>Nombre </span>: <?php echo $patient->name; ?></p>
                                </div>

                                <div class="bio-row">
                                    <p><span>Email </span>: <?php echo $patient->email; ?></p>
                                </div>

                                <div class="bio-row">
                                    <p><span>Direccion</span>: <?php echo $patient->address; ?></p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Telefono </span>: <?php echo $patient->phone; ?></p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Sexo </span>: <?php echo $patient->sex; ?></p>
                                </div>

                                <div class="bio-row">
                                    <p><span>Fecha Cumpleaños </span>: <?php echo $patient->birthdate; ?></p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Expediente grupo </span>: <?php echo $patient->bloodgroup; ?></p>
                                </div>

                                <div class="bio-row">
                                    <p>
                                        <span>Doctor </span>:
                                        <?php
                                        echo $this->doctor_model->getDoctorById($patient->doctor)->name;
                                        ?>
                                    </p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Id Paciente </span>: <?php echo $patient->id; ?></p>
                                </div>
                            </div>
                        </div>
                    </section>
                </aside>
            </div>
        </section>
        <!-- page end-->
    </section>
</section>
<!--main content end-->
<!--footer start-->