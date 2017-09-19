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
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1408afb0fba1a6b46e4b4c828553b05803524f55c65828c85106e7c54b835a19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1408afb0fba1a6b46e4b4c828553b05803524f55c65828c85106e7c54b835a19->enter($__internal_1408afb0fba1a6b46e4b4c828553b05803524f55c65828c85106e7c54b835a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::layout.html.twig"));

        $__internal_b2466973e932cd23ddb16f10ecbbed1d808824509cdd124fa8fda307689ef035 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2466973e932cd23ddb16f10ecbbed1d808824509cdd124fa8fda307689ef035->enter($__internal_b2466973e932cd23ddb16f10ecbbed1d808824509cdd124fa8fda307689ef035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::layout.html.twig"));

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
        echo "        <link rel=\"icon\" type=\"image/png\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/snowtricks-favicon.png"), "html", null, true);
        echo "\">
</head>

    ";
        // line 22
        $this->displayBlock('nav', $context, $blocks);
        // line 25
        echo "

    ";
        // line 27
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 28
            echo "    <ul id=\"slide-out\" class=\"side-nav\">
        <li><div class=\"user-view\">
                ";
            // line 30
            if ( !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "profilePic", array()))) {
                // line 31
                echo "                <img class=\"circle\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "profilePic", array()), "webPath", array())), "html", null, true);
                echo "\" style=\"width:50px;\">
                    ";
            } else {
                // line 33
                echo "                        <img class=\"circle\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/avatar.png"), "html", null, true);
                echo "\" style=\"width:50px;\">
                ";
            }
            // line 35
            echo "                <span class=\"white-text name menu\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</span>
                <span class=\"white-text email menu\">";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
            echo "</span>
            </div></li>
        <li><a href=\"";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "\" class=\"menu\"><i class=\"material-icons\">account_circle</i>Edit my profile</a></li>
        <li><div class=\"divider\"></div></li>
        <li><a href=\"";
            // line 40
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\" class=\"menu\"><i class=\"material-icons\">exit_to_app</i>Logout</a></li>
    </ul>
    ";
        }
        // line 43
        echo "

";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 46
            $this->loadTemplate("AppBundle:templates:session-flashbag.html.twig", "AppBundle::layout.html.twig", 46)->display($context);
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "
    <div class=\"container\" id=\"content\">
    ";
        // line 50
        $this->displayBlock('body', $context, $blocks);
        // line 53
        echo "    </div>

    ";
        // line 55
        $this->displayBlock('footer', $context, $blocks);
        // line 58
        echo "
";
        // line 59
        $this->displayBlock('javascripts', $context, $blocks);
        // line 68
        echo "
 </html>
";
        
        $__internal_1408afb0fba1a6b46e4b4c828553b05803524f55c65828c85106e7c54b835a19->leave($__internal_1408afb0fba1a6b46e4b4c828553b05803524f55c65828c85106e7c54b835a19_prof);

        
        $__internal_b2466973e932cd23ddb16f10ecbbed1d808824509cdd124fa8fda307689ef035->leave($__internal_b2466973e932cd23ddb16f10ecbbed1d808824509cdd124fa8fda307689ef035_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_384d005634cc422dab35ae2f0f40ba2f8f3d3e518cb53411c0cf21e65a11e178 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_384d005634cc422dab35ae2f0f40ba2f8f3d3e518cb53411c0cf21e65a11e178->enter($__internal_384d005634cc422dab35ae2f0f40ba2f8f3d3e518cb53411c0cf21e65a11e178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4cded16b20f85752439263c50f0550a89f1b66985df42af0f655005d827af5f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cded16b20f85752439263c50f0550a89f1b66985df42af0f655005d827af5f1->enter($__internal_4cded16b20f85752439263c50f0550a89f1b66985df42af0f655005d827af5f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SnowTricks - The snowboard tricks platform";
        
        $__internal_4cded16b20f85752439263c50f0550a89f1b66985df42af0f655005d827af5f1->leave($__internal_4cded16b20f85752439263c50f0550a89f1b66985df42af0f655005d827af5f1_prof);

        
        $__internal_384d005634cc422dab35ae2f0f40ba2f8f3d3e518cb53411c0cf21e65a11e178->leave($__internal_384d005634cc422dab35ae2f0f40ba2f8f3d3e518cb53411c0cf21e65a11e178_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a0ad4be61379054fff8d137d6c118a71840235c9f2817af88ff34ff9185d1ce3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0ad4be61379054fff8d137d6c118a71840235c9f2817af88ff34ff9185d1ce3->enter($__internal_a0ad4be61379054fff8d137d6c118a71840235c9f2817af88ff34ff9185d1ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6b33beaf8eda10044c002c85aced5124a63a0ff77a3765f7a3a9d1283be84a37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b33beaf8eda10044c002c85aced5124a63a0ff77a3765f7a3a9d1283be84a37->enter($__internal_6b33beaf8eda10044c002c85aced5124a63a0ff77a3765f7a3a9d1283be84a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_6b33beaf8eda10044c002c85aced5124a63a0ff77a3765f7a3a9d1283be84a37->leave($__internal_6b33beaf8eda10044c002c85aced5124a63a0ff77a3765f7a3a9d1283be84a37_prof);

        
        $__internal_a0ad4be61379054fff8d137d6c118a71840235c9f2817af88ff34ff9185d1ce3->leave($__internal_a0ad4be61379054fff8d137d6c118a71840235c9f2817af88ff34ff9185d1ce3_prof);

    }

    // line 22
    public function block_nav($context, array $blocks = array())
    {
        $__internal_b8536fe889731812fbfb9928fbbf4a6948d31baa6e80a950aeca14513639d542 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8536fe889731812fbfb9928fbbf4a6948d31baa6e80a950aeca14513639d542->enter($__internal_b8536fe889731812fbfb9928fbbf4a6948d31baa6e80a950aeca14513639d542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_d12578868144383dba7ad4b45291e8741c65f185c54e03fc2137668cd3e19939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d12578868144383dba7ad4b45291e8741c65f185c54e03fc2137668cd3e19939->enter($__internal_d12578868144383dba7ad4b45291e8741c65f185c54e03fc2137668cd3e19939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 23
        echo "        ";
        $this->loadTemplate("AppBundle:templates:navbar.html.twig", "AppBundle::layout.html.twig", 23)->display($context);
        // line 24
        echo "    ";
        
        $__internal_d12578868144383dba7ad4b45291e8741c65f185c54e03fc2137668cd3e19939->leave($__internal_d12578868144383dba7ad4b45291e8741c65f185c54e03fc2137668cd3e19939_prof);

        
        $__internal_b8536fe889731812fbfb9928fbbf4a6948d31baa6e80a950aeca14513639d542->leave($__internal_b8536fe889731812fbfb9928fbbf4a6948d31baa6e80a950aeca14513639d542_prof);

    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        $__internal_821c8789a2a70be510e975a6047cbecb4216381c6db8aad4f6b6afcdc1044d6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_821c8789a2a70be510e975a6047cbecb4216381c6db8aad4f6b6afcdc1044d6c->enter($__internal_821c8789a2a70be510e975a6047cbecb4216381c6db8aad4f6b6afcdc1044d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fe0f4fb943378e940843bb68942e89d12f12bb00ca9c4efbe0c463aad639c55b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe0f4fb943378e940843bb68942e89d12f12bb00ca9c4efbe0c463aad639c55b->enter($__internal_fe0f4fb943378e940843bb68942e89d12f12bb00ca9c4efbe0c463aad639c55b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 51
        echo "
    ";
        
        $__internal_fe0f4fb943378e940843bb68942e89d12f12bb00ca9c4efbe0c463aad639c55b->leave($__internal_fe0f4fb943378e940843bb68942e89d12f12bb00ca9c4efbe0c463aad639c55b_prof);

        
        $__internal_821c8789a2a70be510e975a6047cbecb4216381c6db8aad4f6b6afcdc1044d6c->leave($__internal_821c8789a2a70be510e975a6047cbecb4216381c6db8aad4f6b6afcdc1044d6c_prof);

    }

    // line 55
    public function block_footer($context, array $blocks = array())
    {
        $__internal_0f573b0409e1924b98b8d53b04cd2e0525f509ab062f37400611314c89e90e6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f573b0409e1924b98b8d53b04cd2e0525f509ab062f37400611314c89e90e6e->enter($__internal_0f573b0409e1924b98b8d53b04cd2e0525f509ab062f37400611314c89e90e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_4a06c0b3bdb3b89f5ac90611cda385a48d928f38ca663aa8e2d827f30ac29912 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a06c0b3bdb3b89f5ac90611cda385a48d928f38ca663aa8e2d827f30ac29912->enter($__internal_4a06c0b3bdb3b89f5ac90611cda385a48d928f38ca663aa8e2d827f30ac29912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 56
        echo "        ";
        $this->loadTemplate("AppBundle:templates:footer.html.twig", "AppBundle::layout.html.twig", 56)->display($context);
        // line 57
        echo "    ";
        
        $__internal_4a06c0b3bdb3b89f5ac90611cda385a48d928f38ca663aa8e2d827f30ac29912->leave($__internal_4a06c0b3bdb3b89f5ac90611cda385a48d928f38ca663aa8e2d827f30ac29912_prof);

        
        $__internal_0f573b0409e1924b98b8d53b04cd2e0525f509ab062f37400611314c89e90e6e->leave($__internal_0f573b0409e1924b98b8d53b04cd2e0525f509ab062f37400611314c89e90e6e_prof);

    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_53f17ec64c2376e1ab65df9f03e719d6f9db7568f8335746c4143ac779c47631 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53f17ec64c2376e1ab65df9f03e719d6f9db7568f8335746c4143ac779c47631->enter($__internal_53f17ec64c2376e1ab65df9f03e719d6f9db7568f8335746c4143ac779c47631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8652f12bab5a94bf47acc9f6ddcbf1e9b9bcedcaa517a94e253c74a4b500378d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8652f12bab5a94bf47acc9f6ddcbf1e9b9bcedcaa517a94e253c74a4b500378d->enter($__internal_8652f12bab5a94bf47acc9f6ddcbf1e9b9bcedcaa517a94e253c74a4b500378d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 60
        echo "
    ";
        // line 61
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e158e02_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e158e02_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/e158e02_jquery-3.2.1.min_1.js");
            // line 64
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
        // line 66
        echo "
";
        
        $__internal_8652f12bab5a94bf47acc9f6ddcbf1e9b9bcedcaa517a94e253c74a4b500378d->leave($__internal_8652f12bab5a94bf47acc9f6ddcbf1e9b9bcedcaa517a94e253c74a4b500378d_prof);

        
        $__internal_53f17ec64c2376e1ab65df9f03e719d6f9db7568f8335746c4143ac779c47631->leave($__internal_53f17ec64c2376e1ab65df9f03e719d6f9db7568f8335746c4143ac779c47631_prof);

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
        return array (  337 => 66,  311 => 64,  307 => 61,  304 => 60,  295 => 59,  285 => 57,  282 => 56,  273 => 55,  262 => 51,  253 => 50,  243 => 24,  240 => 23,  231 => 22,  220 => 17,  200 => 15,  196 => 13,  193 => 12,  184 => 11,  166 => 8,  154 => 68,  152 => 59,  149 => 58,  147 => 55,  143 => 53,  141 => 50,  137 => 48,  123 => 46,  106 => 45,  102 => 43,  96 => 40,  91 => 38,  86 => 36,  81 => 35,  75 => 33,  69 => 31,  67 => 30,  63 => 28,  61 => 27,  57 => 25,  55 => 22,  48 => 19,  46 => 11,  40 => 8,  31 => 1,);
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
        <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('uploads/img/snowtricks-favicon.png') }}\">
</head>

    {% block nav %}
        {% include 'AppBundle:templates:navbar.html.twig' %}
    {% endblock nav %}


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
{% include 'AppBundle:templates:session-flashbag.html.twig' %}
{% endfor %}

    <div class=\"container\" id=\"content\">
    {% block body %}

    {% endblock %}
    </div>

    {% block footer %}
        {% include 'AppBundle:templates:footer.html.twig' %}
    {% endblock footer %}

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
