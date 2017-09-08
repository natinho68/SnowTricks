<?php

/* AppBundle::layout.html.twig */
class __TwigTemplate_63a0713fa620bb8018aa7efa30b39f054b49af2b305649c787284fe9d0626d9f extends Twig_Template
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "username", array()), "html", null, true);
            echo " !
                            ";
            // line 31
            if ((null === $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "profilePic", array()))) {
                // line 32
                echo "                            <img class=\"circle\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/avatar.png"), "html", null, true);
                echo "\" alt=\"user-image\" style=\"width:50px; vertical-align:middle;\">
                            ";
            } else {
                // line 34
                echo "                            <img class=\"circle\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "profilePic", array()), "webPath", array())), "html", null, true);
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
            if ( !(null === $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "profilePic", array()))) {
                // line 48
                echo "                            <img class=\"circle\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "profilePic", array()), "webPath", array())), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "username", array()), "html", null, true);
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
            if ( !(null === $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "profilePic", array()))) {
                // line 67
                echo "                <img class=\"circle\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "profilePic", array()), "webPath", array())), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "username", array()), "html", null, true);
            echo "</span>
                <span class=\"white-text email menu\">";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "email", array()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
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
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "SnowTricks - The snowboard tricks platform";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "            <!-- Compiled and minified CSS -->
            ";
        // line 13
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "5d13f24_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5d13f24_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/5d13f24_materialize.min_1.css");
            // line 15
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\" type=\"text/css\" />
            ";
            // asset "5d13f24_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5d13f24_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/5d13f24_style_2.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\" type=\"text/css\" />
            ";
        } else {
            // asset "5d13f24"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5d13f24") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/5d13f24.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\" type=\"text/css\" />
            ";
        }
        unset($context["asset_url"]);
        // line 17
        echo "            <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        ";
    }

    // line 94
    public function block_body($context, array $blocks = array())
    {
        // line 95
        echo "
    ";
    }

    // line 116
    public function block_javascripts($context, array $blocks = array())
    {
        // line 117
        echo "
    ";
        // line 118
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e158e02_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e158e02_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/e158e02_jquery-3.2.1.min_1.js");
            // line 121
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
    ";
            // asset "e158e02_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e158e02_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/e158e02_materialize.min_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
    ";
            // asset "e158e02_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e158e02_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/e158e02_materializeLoad_3.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "e158e02"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e158e02") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/e158e02.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 123
        echo "
";
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
        return array (  333 => 123,  307 => 121,  303 => 118,  300 => 117,  297 => 116,  292 => 95,  289 => 94,  284 => 17,  264 => 15,  260 => 13,  257 => 12,  254 => 11,  248 => 8,  242 => 125,  240 => 116,  219 => 97,  217 => 94,  213 => 92,  202 => 87,  195 => 82,  191 => 81,  187 => 79,  181 => 76,  176 => 74,  171 => 72,  166 => 71,  160 => 69,  154 => 67,  152 => 66,  148 => 64,  146 => 63,  139 => 58,  133 => 56,  125 => 52,  119 => 50,  113 => 48,  111 => 47,  105 => 45,  103 => 44,  99 => 43,  95 => 41,  89 => 39,  86 => 38,  82 => 36,  76 => 34,  70 => 32,  68 => 31,  64 => 30,  59 => 29,  57 => 28,  53 => 27,  47 => 24,  40 => 19,  38 => 11,  32 => 8,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle::layout.html.twig", "/Applications/MAMP/htdocs/SnowTricks/src/AppBundle/Resources/views/layout.html.twig");
    }
}
