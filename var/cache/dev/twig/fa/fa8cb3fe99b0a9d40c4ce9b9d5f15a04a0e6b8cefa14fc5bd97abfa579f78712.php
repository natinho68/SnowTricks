<?php

/* AppBundle::layout.html.twig */
class __TwigTemplate_bf95347457c7ff4d9a69efd3c6527103a2016b96c28e0045f2cc43f9e5a89c4b extends Twig_Template
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
        $__internal_6e63f6da36b3dbc31b2fa11a093ca89a804e11642d7180dc3dfe3e932b206dcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e63f6da36b3dbc31b2fa11a093ca89a804e11642d7180dc3dfe3e932b206dcc->enter($__internal_6e63f6da36b3dbc31b2fa11a093ca89a804e11642d7180dc3dfe3e932b206dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::layout.html.twig"));

        $__internal_cfd99af4f5e8f1302df412efed70a23d2c109fda7335b0b095795be088213219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfd99af4f5e8f1302df412efed70a23d2c109fda7335b0b095795be088213219->enter($__internal_cfd99af4f5e8f1302df412efed70a23d2c109fda7335b0b095795be088213219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::layout.html.twig"));

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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " !
                            ";
            // line 31
            if ((null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "profilePic", array()))) {
                // line 32
                echo "                            <img class=\"circle\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/avatar.png"), "html", null, true);
                echo "\" alt=\"user-image\" style=\"width:50px; vertical-align:middle;\">
                            ";
            } else {
                // line 34
                echo "                            <img class=\"circle\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "profilePic", array()), "webPath", array())), "html", null, true);
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
            if ( !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "profilePic", array()))) {
                // line 48
                echo "                            <img class=\"circle\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "profilePic", array()), "webPath", array())), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
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
            if ( !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "profilePic", array()))) {
                // line 67
                echo "                <img class=\"circle\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "profilePic", array()), "webPath", array())), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</span>
                <span class=\"white-text email menu\">";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
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
 </html>";
        
        $__internal_6e63f6da36b3dbc31b2fa11a093ca89a804e11642d7180dc3dfe3e932b206dcc->leave($__internal_6e63f6da36b3dbc31b2fa11a093ca89a804e11642d7180dc3dfe3e932b206dcc_prof);

        
        $__internal_cfd99af4f5e8f1302df412efed70a23d2c109fda7335b0b095795be088213219->leave($__internal_cfd99af4f5e8f1302df412efed70a23d2c109fda7335b0b095795be088213219_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_61114fbbbc14f7d7b7fbd1b71ba8249ebc6fe24c9af305c020badbc0a9d7e615 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61114fbbbc14f7d7b7fbd1b71ba8249ebc6fe24c9af305c020badbc0a9d7e615->enter($__internal_61114fbbbc14f7d7b7fbd1b71ba8249ebc6fe24c9af305c020badbc0a9d7e615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2160752e75b05316d868d64f373cde5d563e62c3d9b869c43f7840835e0c31ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2160752e75b05316d868d64f373cde5d563e62c3d9b869c43f7840835e0c31ce->enter($__internal_2160752e75b05316d868d64f373cde5d563e62c3d9b869c43f7840835e0c31ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SnowTricks - The snowboard tricks platform";
        
        $__internal_2160752e75b05316d868d64f373cde5d563e62c3d9b869c43f7840835e0c31ce->leave($__internal_2160752e75b05316d868d64f373cde5d563e62c3d9b869c43f7840835e0c31ce_prof);

        
        $__internal_61114fbbbc14f7d7b7fbd1b71ba8249ebc6fe24c9af305c020badbc0a9d7e615->leave($__internal_61114fbbbc14f7d7b7fbd1b71ba8249ebc6fe24c9af305c020badbc0a9d7e615_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_16cfc1d7ef25b671366d5c8a468631251bb0193fd53ead89caa2bddef88c4cdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16cfc1d7ef25b671366d5c8a468631251bb0193fd53ead89caa2bddef88c4cdb->enter($__internal_16cfc1d7ef25b671366d5c8a468631251bb0193fd53ead89caa2bddef88c4cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_897f97bc4b67b5f8c7db18d7ae76b113ddca783a7df14fdeaa957916614f57bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_897f97bc4b67b5f8c7db18d7ae76b113ddca783a7df14fdeaa957916614f57bd->enter($__internal_897f97bc4b67b5f8c7db18d7ae76b113ddca783a7df14fdeaa957916614f57bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "            <!-- Compiled and minified CSS -->
            ";
        // line 13
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "5d13f24_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5d13f24_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/5d13f24_materialize.min_1.css");
            // line 15
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
            ";
            // asset "5d13f24_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5d13f24_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/5d13f24_style_2.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
            ";
        } else {
            // asset "5d13f24"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5d13f24") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/5d13f24.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
            ";
        }
        unset($context["asset_url"]);
        // line 17
        echo "            <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        ";
        
        $__internal_897f97bc4b67b5f8c7db18d7ae76b113ddca783a7df14fdeaa957916614f57bd->leave($__internal_897f97bc4b67b5f8c7db18d7ae76b113ddca783a7df14fdeaa957916614f57bd_prof);

        
        $__internal_16cfc1d7ef25b671366d5c8a468631251bb0193fd53ead89caa2bddef88c4cdb->leave($__internal_16cfc1d7ef25b671366d5c8a468631251bb0193fd53ead89caa2bddef88c4cdb_prof);

    }

    // line 94
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb3131ce8ba327badae154e800c00fada74665b5023b787092dc9c8ba60fb2ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb3131ce8ba327badae154e800c00fada74665b5023b787092dc9c8ba60fb2ae->enter($__internal_eb3131ce8ba327badae154e800c00fada74665b5023b787092dc9c8ba60fb2ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e0e9557f88e9f220bb794aa69273051d7fe36d0b24302372167c94b40f7a9f32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0e9557f88e9f220bb794aa69273051d7fe36d0b24302372167c94b40f7a9f32->enter($__internal_e0e9557f88e9f220bb794aa69273051d7fe36d0b24302372167c94b40f7a9f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 95
        echo "
    ";
        
        $__internal_e0e9557f88e9f220bb794aa69273051d7fe36d0b24302372167c94b40f7a9f32->leave($__internal_e0e9557f88e9f220bb794aa69273051d7fe36d0b24302372167c94b40f7a9f32_prof);

        
        $__internal_eb3131ce8ba327badae154e800c00fada74665b5023b787092dc9c8ba60fb2ae->leave($__internal_eb3131ce8ba327badae154e800c00fada74665b5023b787092dc9c8ba60fb2ae_prof);

    }

    // line 116
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8832fbc1270ff75c67f946bc65586f7dcfa258af48203381e0502fe389bc3713 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8832fbc1270ff75c67f946bc65586f7dcfa258af48203381e0502fe389bc3713->enter($__internal_8832fbc1270ff75c67f946bc65586f7dcfa258af48203381e0502fe389bc3713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d49f2dbf2b0733c416705961e70fb06c96b0426101f1479860d86fe33ee481df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d49f2dbf2b0733c416705961e70fb06c96b0426101f1479860d86fe33ee481df->enter($__internal_d49f2dbf2b0733c416705961e70fb06c96b0426101f1479860d86fe33ee481df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 117
        echo "
    ";
        // line 118
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e158e02_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e158e02_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/e158e02_jquery-3.2.1.min_1.js");
            // line 121
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "e158e02_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e158e02_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/e158e02_materialize.min_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "e158e02_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e158e02_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/e158e02_materializeLoad_3.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "e158e02"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e158e02") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/e158e02.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 123
        echo "
";
        
        $__internal_d49f2dbf2b0733c416705961e70fb06c96b0426101f1479860d86fe33ee481df->leave($__internal_d49f2dbf2b0733c416705961e70fb06c96b0426101f1479860d86fe33ee481df_prof);

        
        $__internal_8832fbc1270ff75c67f946bc65586f7dcfa258af48203381e0502fe389bc3713->leave($__internal_8832fbc1270ff75c67f946bc65586f7dcfa258af48203381e0502fe389bc3713_prof);

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
        return array (  386 => 123,  360 => 121,  356 => 118,  353 => 117,  344 => 116,  333 => 95,  324 => 94,  313 => 17,  293 => 15,  289 => 13,  286 => 12,  277 => 11,  259 => 8,  248 => 125,  246 => 116,  225 => 97,  223 => 94,  219 => 92,  208 => 87,  201 => 82,  197 => 81,  193 => 79,  187 => 76,  182 => 74,  177 => 72,  172 => 71,  166 => 69,  160 => 67,  158 => 66,  154 => 64,  152 => 63,  145 => 58,  139 => 56,  131 => 52,  125 => 50,  119 => 48,  117 => 47,  111 => 45,  109 => 44,  105 => 43,  101 => 41,  95 => 39,  92 => 38,  88 => 36,  82 => 34,  76 => 32,  74 => 31,  70 => 30,  65 => 29,  63 => 28,  59 => 27,  53 => 24,  46 => 19,  44 => 11,  38 => 8,  29 => 1,);
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

 </html>", "AppBundle::layout.html.twig", "/Applications/MAMP/htdocs/SnowTricks/src/AppBundle/Resources/views/layout.html.twig");
    }
}
