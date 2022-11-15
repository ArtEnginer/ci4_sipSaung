        <nav id="navbar" class="navbar">
            <ul>
                <!-- if route in  pendaftaran -->
                <?php
                // if url in pendaftaran 
                if (current_url(true)->getSegment(1) == 'pendaftaran') : ?>
                    <li><a class="nav-link scrollto active" href="<?= route_to('/') ?>">Home</a></li>
                    <li>
                        <?php if (auth()->user() == null) : ?>
                            <a class="getstarted scrollto" href="login">Login</a>
                        <?php else : ?>
                            <a class="getstarted scrollto" href="logout">logout</a>
                        <?php endif; ?>
                    </li>

                <?php else : ?>

                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
                    <li><a class="nav-link scrollto" href="<?= route_to('pendaftaran') ?>">Pendaftaran</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <?php if (auth()->user() !== null) : ?>
                        <li>
                            <a href="<?= route_to('panel') ?>" class="nav-link scrollto">Dashboard</a>
                        </li>
                    <?php endif ?>
                    <li>
                        <?php if (auth()->user() == null) : ?>
                            <a class="getstarted scrollto" href="login">Login</a>
                        <?php else : ?>
                            <a class="getstarted scrollto" href="logout">logout</a>
                        <?php endif; ?>
                    </li>
                <?php endif; ?>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->