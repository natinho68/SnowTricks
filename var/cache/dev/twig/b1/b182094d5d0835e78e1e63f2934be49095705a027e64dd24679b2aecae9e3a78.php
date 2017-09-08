<?php

/* AppBundle::layout.html.twig */
class __TwigTemplate_c8395f0862e082392e129fa3069b471144f8323c0ccf04624b7c3548bda510fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b18b9208cc2c0e6e3a27a3aaa17ebd14498b68c0719cd43b44e31739a2aba55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b18b9208cc2c0e6e3a27a3aaa17ebd14498b68c0719cd43b44e31739a2aba55->enter($__internal_4b18b9208cc2c0e6e3a27a3aaa17ebd14498b68c0719cd43b44e31739a2aba55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::layout.html.twig"));

        $__internal_0fdf2151bf423c9f05942edcf48033118c7fb1971b443a085fd4de323f68d7c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fdf2151bf423c9f05942edcf48033118c7fb1971b443a085fd4de323f68d7c3->enter($__internal_0fdf2151bf423c9f05942edcf48033118c7fb1971b443a085fd4de323f68d7c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::layout.html.twig"));

        // line 1
        echo " <!DOCTYPE html>
    <html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>


        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "</head>

<div class=\"navbar-fixed\">
    <nav class=\"nav-extended\">
        <div class=\"nav-wrapper white\">
            <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"brand-logo black-text\">SnowTricks</a>
            <a href=\"#\" data-activates=\"mobile-demo\" class=\"button-collapse btnCol black-text\"><i class=\"material-icons\">menu</i></a>
            <ul id=\"nav-mobile\" class=\"black-text right hide-on-med-and-down valign-wrapper\">
                <li><a class=\"black-text menu\" href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Home</a></li>
                ";
        // line 28
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 29
            echo "                    <li><a class=\"black-text menu\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add");
            echo "\">Add a trick</a></li>
                    <li><a href=\"#\" data-activates=\"slide-out\"  class=\"button-collapse waves-effect white menu btn profilebtn btnCol show-on-large black-text\">Hi ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " !
                            ";
            // line 31
            if ((null === $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "profilePic", array()))) {
                // line 32
                echo "                            <img class=\"circle\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/avatar.png"), "html", null, true);
                echo "\" alt=\"user-image\" style=\"width:50px; vertical-align:middle;\">
                            ";
            } else {
                // line 34
                echo "                            <img class=\"circle\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "profilePic", array()), "webPath", array())), "html", null, true);
                echo "\" style=\"width:50px; vertical-align:middle;\">
                            ";
            }
            // line 36
            echo "                        </a></li>
                    ";
        }
        // line 38
        echo "                ";
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER") == false)) {
            // line 39
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\" class=\"black-text menu\">Login</a></li>
                ";
        }
        // line 41
        echo "                    </ul>
            <ul class=\"side-nav\" id=\"mobile-demo\">
                <li><a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"menu\">Home</a></li>
                ";
        // line 44
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 45
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add");
            echo "\" class=\"menu\">Add a trick</a></li>
                    <li class=\"left-align\"><a href=\"#\" data-activates=\"slide-out\"  class=\"button-collapse btnCol menu show-on-large\">
                            ";
            // line 47
            if ( !(null === $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "profilePic", array()))) {
                // line 48
                echo "                            <img class=\"circle\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "profilePic", array()), "webPath", array())), "html", null, true);
                echo "\" style=\"width:25px; vertical-align:middle;\">
                            ";
            } else {
                // line 50
                echo "                                <img class=\"circle\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/avatar.png"), "html", null, true);
                echo "\" style=\"width:25px; vertical-align:middle;\">
                            ";
            }
            // line 52
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a></li>


                ";
        } else {
            // line 56
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\" class=\"menu\">Login</a></li>
                ";
        }
        // line 58
        echo "            </ul>
                </div>
    </nav>
</div>

    ";
        // line 63
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 64
            echo "    <ul id=\"slide-out\" class=\"side-nav\">
        <li><div class=\"user-view\">
                ";
            // line 66
            if ( !(null === $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "profilePic", array()))) {
                // line 67
                echo "                <img class=\"circle\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "profilePic", array()), "webPath", array())), "html", null, true);
                echo "\" style=\"width:50px;\">
                    ";
            } else {
                // line 69
                echo "                        <img class=\"circle\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/avatar.png"), "html", null, true);
                echo "\" style=\"width:50px;\">
                ";
            }
            // line 71
            echo "                <span class=\"white-text name menu\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</span>
                <span class=\"white-text email menu\">";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
            echo "</span>
            </div></li>
        <li><a href=\"";
            // line 74
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "\" class=\"menu\"><i class=\"material-icons\">account_circle</i>Edit my profile</a></li>
        <li><div class=\"divider\"></div></li>
        <li><a href=\"";
            // line 76
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\" class=\"menu\"><i class=\"material-icons\">exit_to_app</i>Logout</a></li>
    </ul>
    ";
        }
        // line 79
        echo "

";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 82
            echo "    <div class=\"row\" style=\"padding-top:15px;\">
        <div class=\"col s12 m10 l10 offset-m1 offset-l1\">
            <div class=\"chip black alert\">
                <i class=\" close material-icons right white-text\">close</i>
                <i class=\"material-icons white-text left\" style=\"padding-top: 2px;\">check_circle</i>
                <h6 class=\"white-text\">";
            // line 87
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</h6>
            </div>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "
    <div class=\"container\" id=\"content\">
    ";
        // line 94
        $this->displayBlock('body', $context, $blocks);
        // line 97
        echo "    </div>

    <footer class=\"page-footer black\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col l6 s12\">
                    <h5 class=\"white-text\">SnowTrick</h5>
                    <p class=\"white-text text-lighten-1\">The community platform of the best snowboard tricks</p>
                </div>
            </div>
        </div>
        <div class=\"footer-copyright\">
            <div class=\"container white-text text-darken-1\">
                © 2017 SnowTricks
                <a class=\"white-text text-darken-1 right\" href=\"mailto:nathan.meyer-pro@live.fr\">created by Nathan MEYER</a>
            </div>
        </div>
    </footer>

";
        // line 116
        $this->displayBlock('javascripts', $context, $blocks);
        // line 125
        echo "
 </html>
";
        
        $__internal_4b18b9208cc2c0e6e3a27a3aaa17ebd14498b68c0719cd43b44e31739a2aba55->leave($__internal_4b18b9208cc2c0e6e3a27a3aaa17ebd14498b68c0719cd43b44e31739a2aba55_prof);

        
        $__internal_0fdf2151bf423c9f05942edcf48033118c7fb1971b443a085fd4de323f68d7c3->leave($__internal_0fdf2151bf423c9f05942edcf48033118c7fb1971b443a085fd4de323f68d7c3_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a216a91fc432bccabc6f84c07d0d7f2bffb86d2ee787af6a0f5bb69a2b43e74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a216a91fc432bccabc6f84c07d0d7f2bffb86d2ee787af6a0f5bb69a2b43e74->enter($__internal_5a216a91fc432bccabc6f84c07d0d7f2bffb86d2ee787af6a0f5bb69a2b43e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6c1673a8a0338ab1a35cd3e4109fdc1c889aa195ce93920725bc807c04c74f18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c1673a8a0338ab1a35cd3e4109fdc1c889aa195ce93920725bc807c04c74f18->enter($__internal_6c1673a8a0338ab1a35cd3e4109fdc1c889aa195ce93920725bc807c04c74f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SnowTricks - The snowboard tricks platform";
        
        $__internal_6c1673a8a0338ab1a35cd3e4109fdc1c889aa195ce93920725bc807c04c74f18->leave($__internal_6c1673a8a0338ab1a35cd3e4109fdc1c889aa195ce93920725bc807c04c74f18_prof);

        
        $__internal_5a216a91fc432bccabc6f84c07d0d7f2bffb86d2ee787af6a0f5bb69a2b43e74->leave($__internal_5a216a91fc432bccabc6f84c07d0d7f2bffb86d2ee787af6a0f5bb69a2b43e74_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_71aa63ae093948b42b5ae98d481de4491523607f4c88ab37801f98ab52dc4f3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71aa63ae093948b42b5ae98d481de4491523607f4c88ab37801f98ab52dc4f3d->enter($__internal_71aa63ae093948b42b5ae98d481de4491523607f4c88ab37801f98ab52dc4f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_298f44beb4767c1c7b42a2345a58d60b5bf735c7503bc8a0785f8276f7ae5377 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_298f44beb4767c1c7b42a2345a58d60b5bf735c7503bc8a0785f8276f7ae5377->enter($__internal_298f44beb4767c1c7b42a2345a58d60b5bf735c7503bc8a0785f8276f7ae5377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "            <!-- Compiled and minified CSS -->
            ";
        // line 13
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "5d13f24_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5d13f24_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/5d13f24_materialize.min_1.css");
            // line 15
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
            ";
            // asset "5d13f24_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5d13f24_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/5d13f24_style_2.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
            ";
        } else {
            // asset "5d13f24"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5d13f24") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/5d13f24.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
            ";
        }
        unset($context["asset_url"]);
        // line 17
        echo "            <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        ";
        
        $__internal_298f44beb4767c1c7b42a2345a58d60b5bf735c7503bc8a0785f8276f7ae5377->leave($__internal_298f44beb4767c1c7b42a2345a58d60b5bf735c7503bc8a0785f8276f7ae5377_prof);

        
        $__internal_71aa63ae093948b42b5ae98d481de4491523607f4c88ab37801f98ab52dc4f3d->leave($__internal_71aa63ae093948b42b5ae98d481de4491523607f4c88ab37801f98ab52dc4f3d_prof);

    }

    // line 94
    public function block_body($context, array $blocks = array())
    {
        $__internal_656c92a81fe141ac5e358cfd3f0654f3332a82c79299d747051a5166555e7405 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_656c92a81fe141ac5e358cfd3f0654f3332a82c79299d747051a5166555e7405->enter($__internal_656c92a81fe141ac5e358cfd3f0654f3332a82c79299d747051a5166555e7405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d9efffbbbd40a723710c675e2dba9687c2908156d2649d3d3b85b5846caf9863 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9efffbbbd40a723710c675e2dba9687c2908156d2649d3d3b85b5846caf9863->enter($__internal_d9efffbbbd40a723710c675e2dba9687c2908156d2649d3d3b85b5846caf9863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 95
        echo "
    ";
        
        $__internal_d9efffbbbd40a723710c675e2dba9687c2908156d2649d3d3b85b5846caf9863->leave($__internal_d9efffbbbd40a723710c675e2dba9687c2908156d2649d3d3b85b5846caf9863_prof);

        
        $__internal_656c92a81fe141ac5e358cfd3f0654f3332a82c79299d747051a5166555e7405->leave($__internal_656c92a81fe141ac5e358cfd3f0654f3332a82c79299d747051a5166555e7405_prof);

    }

    // line 116
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_699e2316a70db503be0457e2c1eb893d26f9591022c39cb18b11033a3be37ae5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_699e2316a70db503be0457e2c1eb893d26f9591022c39cb18b11033a3be37ae5->enter($__internal_699e2316a70db503be0457e2c1eb893d26f9591022c39cb18b11033a3be37ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f2b350a7d87acbdf8fad858bf0374419c85010c9bd63f6ef1ce7299dbd4bd324 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2b350a7d87acbdf8fad858bf0374419c85010c9bd63f6ef1ce7299dbd4bd324->enter($__internal_f2b350a7d87acbdf8fad858bf0374419c85010c9bd63f6ef1ce7299dbd4bd324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 117
        echo "
    ";
        // line 118
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e158e02_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e158e02_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/e158e02_jquery-3.2.1.min_1.js");
            // line 121
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "e158e02_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e158e02_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/e158e02_materialize.min_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "e158e02_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e158e02_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/e158e02_materializeLoad_3.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "e158e02"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e158e02") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/e158e02.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 123
        echo "
";
        
        $__internal_f2b350a7d87acbdf8fad858bf0374419c85010c9bd63f6ef1ce7299dbd4bd324->leave($__internal_f2b350a7d87acbdf8fad858bf0374419c85010c9bd63f6ef1ce7299dbd4bd324_prof);

        
        $__internal_699e2316a70db503be0457e2c1eb893d26f9591022c39cb18b11033a3be37ae5->leave($__internal_699e2316a70db503be0457e2c1eb893d26f9591022c39cb18b11033a3be37ae5_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  387 => 123,  361 => 121,  357 => 118,  354 => 117,  345 => 116,  334 => 95,  325 => 94,  314 => 17,  294 => 15,  290 => 13,  287 => 12,  278 => 11,  260 => 8,  248 => 125,  246 => 116,  225 => 97,  223 => 94,  219 => 92,  208 => 87,  201 => 82,  197 => 81,  193 => 79,  187 => 76,  182 => 74,  177 => 72,  172 => 71,  166 => 69,  160 => 67,  158 => 66,  154 => 64,  152 => 63,  145 => 58,  139 => 56,  131 => 52,  125 => 50,  119 => 48,  117 => 47,  111 => 45,  109 => 44,  105 => 43,  101 => 41,  95 => 39,  92 => 38,  88 => 36,  82 => 34,  76 => 32,  74 => 31,  70 => 30,  65 => 29,  63 => 28,  59 => 27,  53 => 24,  46 => 19,  44 => 11,  38 => 8,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source(" <!DOCTYPE html>
    <html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>{% block title %}SnowTricks - The snowboard tricks platform{% endblock %}</title>


        {% block stylesheets %}
            <!-- Compiled and minified CSS -->
            {% stylesheets 'bundles/app/materialize/css/materialize.min.css' filter='?cssrewrite, ?scssphp'
                            'bundles/app/materialize/css/style.css' filter='?cssrewrite, ?scssphp' %}
            <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\" />
            {% endstylesheets %}
            <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        {% endblock %}
</head>

<div class=\"navbar-fixed\">
    <nav class=\"nav-extended\">
        <div class=\"nav-wrapper white\">
            <a href=\"{{ path('homepage') }}\" class=\"brand-logo black-text\">SnowTricks</a>
            <a href=\"#\" data-activates=\"mobile-demo\" class=\"button-collapse btnCol black-text\"><i class=\"material-icons\">menu</i></a>
            <ul id=\"nav-mobile\" class=\"black-text right hide-on-med-and-down valign-wrapper\">
                <li><a class=\"black-text menu\" href=\"{{ path('homepage') }}\">Home</a></li>
                {% if is_granted(\"ROLE_USER\") %}
                    <li><a class=\"black-text menu\" href=\"{{ path('add') }}\">Add a trick</a></li>
                    <li><a href=\"#\" data-activates=\"slide-out\"  class=\"button-collapse waves-effect white menu btn profilebtn btnCol show-on-large black-text\">Hi {{ app.user.username }} !
                            {% if app.user.profilePic is null %}
                            <img class=\"circle\" src=\"{{ asset('uploads/img/avatar.png') }}\" alt=\"user-image\" style=\"width:50px; vertical-align:middle;\">
                            {% else %}
                            <img class=\"circle\" src=\"{{ asset(app.user.profilePic.webPath) }}\" style=\"width:50px; vertical-align:middle;\">
                            {% endif %}
                        </a></li>
                    {% endif %}
                {% if is_granted(\"ROLE_USER\") == false %}
                    <li><a href=\"{{ path('fos_user_security_login') }}\" class=\"black-text menu\">Login</a></li>
                {% endif %}
                    </ul>
            <ul class=\"side-nav\" id=\"mobile-demo\">
                <li><a href=\"{{ path('homepage') }}\" class=\"menu\">Home</a></li>
                {% if is_granted(\"ROLE_USER\") %}
                    <li><a href=\"{{ path('add') }}\" class=\"menu\">Add a trick</a></li>
                    <li class=\"left-align\"><a href=\"#\" data-activates=\"slide-out\"  class=\"button-collapse btnCol menu show-on-large\">
                            {% if app.user.profilePic is not null %}
                            <img class=\"circle\" src=\"{{ asset(app.user.profilePic.webPath) }}\" style=\"width:25px; vertical-align:middle;\">
                            {% else %}
                                <img class=\"circle\" src=\"{{ asset('uploads/img/avatar.png') }}\" style=\"width:25px; vertical-align:middle;\">
                            {% endif %}
                            {{ app.user.username }}</a></li>


                {% else %}
                    <li><a href=\"{{ path('fos_user_security_login') }}\" class=\"menu\">Login</a></li>
                {% endif %}
            </ul>
                </div>
    </nav>
</div>

    {% if is_granted(\"ROLE_USER\") %}
    <ul id=\"slide-out\" class=\"side-nav\">
        <li><div class=\"user-view\">
                {% if app.user.profilePic is not null %}
                <img class=\"circle\" src=\"{{ asset(app.user.profilePic.webPath) }}\" style=\"width:50px;\">
                    {% else %}
                        <img class=\"circle\" src=\"{{ asset('uploads/img/avatar.png') }}\" style=\"width:50px;\">
                {% endif %}
                <span class=\"white-text name menu\">{{ app.user.username }}</span>
                <span class=\"white-text email menu\">{{ app.user.email }}</span>
            </div></li>
        <li><a href=\"{{ path('fos_user_profile_edit') }}\" class=\"menu\"><i class=\"material-icons\">account_circle</i>Edit my profile</a></li>
        <li><div class=\"divider\"></div></li>
        <li><a href=\"{{ path('fos_user_security_logout') }}\" class=\"menu\"><i class=\"material-icons\">exit_to_app</i>Logout</a></li>
    </ul>
    {% endif %}


{% for message in app.session.flashbag.get('info') %}
    <div class=\"row\" style=\"padding-top:15px;\">
        <div class=\"col s12 m10 l10 offset-m1 offset-l1\">
            <div class=\"chip black alert\">
                <i class=\" close material-icons right white-text\">close</i>
                <i class=\"material-icons white-text left\" style=\"padding-top: 2px;\">check_circle</i>
                <h6 class=\"white-text\">{{ message }}</h6>
            </div>
        </div>
    </div>
{% endfor %}

    <div class=\"container\" id=\"content\">
    {% block body %}

    {% endblock %}
    </div>

    <footer class=\"page-footer black\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col l6 s12\">
                    <h5 class=\"white-text\">SnowTrick</h5>
                    <p class=\"white-text text-lighten-1\">The community platform of the best snowboard tricks</p>
                </div>
            </div>
        </div>
        <div class=\"footer-copyright\">
            <div class=\"container white-text text-darken-1\">
                © 2017 SnowTricks
                <a class=\"white-text text-darken-1 right\" href=\"mailto:nathan.meyer-pro@live.fr\">created by Nathan MEYER</a>
            </div>
        </div>
    </footer>

{% block javascripts %}

    {% javascripts  'bundles/app/materialize/js/jquery-3.2.1.min.js'  filter='?jsqueeze'
                    'bundles/app/materialize/js/materialize.min.js' filter='?jsqueeze'
                    'bundles/app/materialize/js/materializeLoad.js' filter='?jsqueeze'%}
    <script type=\"text/javascript\" src=\"{{ asset_url }}\"></script>
    {% endjavascripts %}

{% endblock %}

 </html>
", "AppBundle::layout.html.twig", "/Applications/MAMP/htdocs/SnowTricks/src/AppBundle/Resources/views/layout.html.twig");
    }
}
