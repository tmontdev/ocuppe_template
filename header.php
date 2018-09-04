<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ocuppe</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header id="header" class="header">
        <div class="rollback">

        </div>
        <div class="header-mobile">
            <div class="switch">
                <span class="menu-switch">
                    <i class="fa fa-bars"></i>
                </span>
            </div>
            <div class="mobile-logo">
                <?php echo do_shortcode('[sc name="Logo Desktop"]');?>
            </div>
        </div>
        <div class="header-party">
            <i class="fa fa-arrow-left disable"></i>
            <div class="header-info-party whole-block">
                <div class="container">
                    <div class="row header-first-line">
                        <a href="" class="header-home col-md-4 col-xs-12">
                            <?php echo do_shortcode('[sc name="Logo Desktop"]');?>
                        </a>
                        <div class="header-info col-md-8 col-xs-12">
                            <a href="#" class="header-info-address header-info-item">
                                <i class="fa fa-map-marker-alt header-info-icon"></i> <?php echo do_shortcode('[sc name="endereco_primeira_parte"]')." ".do_shortcode('[sc name="endereco_segunda_parte"]'); ?>
                            </a>   
                            <a href="#" class="header-info-phone header-info-item">
                                <i class="fa fa-envelope header-info-icon"></i> <?php echo do_shortcode('[sc name="email1"]');?> 
                            </a>  
                            <a href="#" class="header-info-mail header-info-item">
                                <i class="fa fa-mobile header-info-icon"></i> <?php echo do_shortcode('[sc name="telefone1"]');?> 
                            </a>  
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-menu-party">
            <div class="container">
                <div class="row header-second-line">
                    <!-- Lembrar de deixar os a com size() se for o caso... menu quebrando linha -->
                        <nav class="header-menu">
                            <ul class="header-menu-options">
                                <li class="header-menu-option home-link active">
                                    <a href="#home" class="header-menu-option-link"><i class="fa fa-home"></i> Home</a> 
                                </li>
                                <li class="header-menu-option company-link">
                                    <a href="#company" class="header-menu-option-link"><i class="fa fa-info-circle"></i> Empresa</a> 
                                </li>
                                <li class="header-menu-option services-link">
                                    <a href="#services" class="header-menu-option-link"><i class="fa fa-cog"></i> Serviços</a> 
                                </li>
                                <li class="header-menu-option depositions-link">
                                    <a href="#depositions" class="header-menu-option-link"><i class="fa fa-quote-left"></i> Depoimentos</a> 
                                </li>
                                <li class="header-menu-option clients-link">
                                    <a href="#clients" class="header-menu-option-link"><i class="fa fa-users"></i> Clientes</a> 
                                </li>
                                <li class="header-menu-option contact-link">
                                    <a href="#contact" class="header-menu-option-link"><i class="fa fa-phone"></i> Contato</a> 
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    
</body>
</html>