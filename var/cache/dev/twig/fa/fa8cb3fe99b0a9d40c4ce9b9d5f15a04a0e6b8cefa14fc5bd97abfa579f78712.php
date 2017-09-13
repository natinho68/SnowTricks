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
        $__internal_1bf91b3c90077ffdfa3839d392c3b88d00c48bd59eb93c6f030b31dc452f4823 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bf91b3c90077ffdfa3839d392c3b88d00c48bd59eb93c6f030b31dc452f4823->enter($__internal_1bf91b3c90077ffdfa3839d392c3b88d00c48bd59eb93c6f030b31dc452f4823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::layout.html.twig"));

        $__internal_66777b8bbef41bb1c7b0096624b4fb3354e366d8cf9df9788cb6fbccc96e25d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66777b8bbef41bb1c7b0096624b4fb3354e366d8cf9df9788cb6fbccc96e25d5->enter($__internal_66777b8bbef41bb1c7b0096624b4fb3354e366d8cf9df9788cb6fbccc96e25d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::layout.html.twig"));

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
        
        $__internal_1bf91b3c90077ffdfa3839d392c3b88d00c48bd59eb93c6f030b31dc452f4823->leave($__internal_1bf91b3c90077ffdfa3839d392c3b88d00c48bd59eb93c6f030b31dc452f4823_prof);

        
        $__internal_66777b8bbef41bb1c7b0096624b4fb3354e366d8cf9df9788cb6fbccc96e25d5->leave($__internal_66777b8bbef41bb1c7b0096624b4fb3354e366d8cf9df9788cb6fbccc96e25d5_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e0a5ff8e7220ad23bbb505fafbef9bd016dc75a6a16271f61f4cf8a6c698dc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e0a5ff8e7220ad23bbb505fafbef9bd016dc75a6a16271f61f4cf8a6c698dc0->enter($__internal_9e0a5ff8e7220ad23bbb505fafbef9bd016dc75a6a16271f61f4cf8a6c698dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c71763ef1f6ca0918b43dcfd9ddd89999d064aa44474682ff56ff984e30c72f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c71763ef1f6ca0918b43dcfd9ddd89999d064aa44474682ff56ff984e30c72f8->enter($__internal_c71763ef1f6ca0918b43dcfd9ddd89999d064aa44474682ff56ff984e30c72f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SnowTricks - The snowboard tricks platform";
        
        $__internal_c71763ef1f6ca0918b43dcfd9ddd89999d064aa44474682ff56ff984e30c72f8->leave($__internal_c71763ef1f6ca0918b43dcfd9ddd89999d064aa44474682ff56ff984e30c72f8_prof);

        
        $__internal_9e0a5ff8e7220ad23bbb505fafbef9bd016dc75a6a16271f61f4cf8a6c698dc0->leave($__internal_9e0a5ff8e7220ad23bbb505fafbef9bd016dc75a6a16271f61f4cf8a6c698dc0_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f27f4205faa9d8ae97be1a0429607c5b021c391f86366daadc35a7a4f97cb870 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f27f4205faa9d8ae97be1a0429607c5b021c391f86366daadc35a7a4f97cb870->enter($__internal_f27f4205faa9d8ae97be1a0429607c5b021c391f86366daadc35a7a4f97cb870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_cc79a0f40dde355f9c5bcd45da4b139b556124c6537b158acacbdf3c9f7666e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc79a0f40dde355f9c5bcd45da4b139b556124c6537b158acacbdf3c9f7666e1->enter($__internal_cc79a0f40dde355f9c5bcd45da4b139b556124c6537b158acacbdf3c9f7666e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_cc79a0f40dde355f9c5bcd45da4b139b556124c6537b158acacbdf3c9f7666e1->leave($__internal_cc79a0f40dde355f9c5bcd45da4b139b556124c6537b158acacbdf3c9f7666e1_prof);

        
        $__internal_f27f4205faa9d8ae97be1a0429607c5b021c391f86366daadc35a7a4f97cb870->leave($__internal_f27f4205faa9d8ae97be1a0429607c5b021c391f86366daadc35a7a4f97cb870_prof);

    }

    // line 22
    public function block_nav($context, array $blocks = array())
    {
        $__internal_53e37c25ae9032b7e482982f75aef32cde7f82e73c2b688a9b91026edfe9c295 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53e37c25ae9032b7e482982f75aef32cde7f82e73c2b688a9b91026edfe9c295->enter($__internal_53e37c25ae9032b7e482982f75aef32cde7f82e73c2b688a9b91026edfe9c295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_93d26e70335cb778c293e9157b4f0383facdee9d9402332b27809c5f51d97234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93d26e70335cb778c293e9157b4f0383facdee9d9402332b27809c5f51d97234->enter($__internal_93d26e70335cb778c293e9157b4f0383facdee9d9402332b27809c5f51d97234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 23
        echo "        ";
        $this->loadTemplate("AppBundle:templates:navbar.html.twig", "AppBundle::layout.html.twig", 23)->display($context);
        // line 24
        echo "    ";
        
        $__internal_93d26e70335cb778c293e9157b4f0383facdee9d9402332b27809c5f51d97234->leave($__internal_93d26e70335cb778c293e9157b4f0383facdee9d9402332b27809c5f51d97234_prof);

        
        $__internal_53e37c25ae9032b7e482982f75aef32cde7f82e73c2b688a9b91026edfe9c295->leave($__internal_53e37c25ae9032b7e482982f75aef32cde7f82e73c2b688a9b91026edfe9c295_prof);

    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        $__internal_d94f81e8e29a6db4e0371a3ee9a8ed20b722e5a781c604ed1fb0959dab0650b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d94f81e8e29a6db4e0371a3ee9a8ed20b722e5a781c604ed1fb0959dab0650b4->enter($__internal_d94f81e8e29a6db4e0371a3ee9a8ed20b722e5a781c604ed1fb0959dab0650b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cb83ac2cdc0d77b50515b6bb90d5b82b6f840ac4ebc4452408050bed2a8f137a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb83ac2cdc0d77b50515b6bb90d5b82b6f840ac4ebc4452408050bed2a8f137a->enter($__internal_cb83ac2cdc0d77b50515b6bb90d5b82b6f840ac4ebc4452408050bed2a8f137a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 51
        echo "
    ";
        
        $__internal_cb83ac2cdc0d77b50515b6bb90d5b82b6f840ac4ebc4452408050bed2a8f137a->leave($__internal_cb83ac2cdc0d77b50515b6bb90d5b82b6f840ac4ebc4452408050bed2a8f137a_prof);

        
        $__internal_d94f81e8e29a6db4e0371a3ee9a8ed20b722e5a781c604ed1fb0959dab0650b4->leave($__internal_d94f81e8e29a6db4e0371a3ee9a8ed20b722e5a781c604ed1fb0959dab0650b4_prof);

    }

    // line 55
    public function block_footer($context, array $blocks = array())
    {
        $__internal_099ac9849e3c0e4bf60fecf36ef99553bfd00120badc53b062148c526fced3c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_099ac9849e3c0e4bf60fecf36ef99553bfd00120badc53b062148c526fced3c0->enter($__internal_099ac9849e3c0e4bf60fecf36ef99553bfd00120badc53b062148c526fced3c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_66a47e3bb77297efb8402a1db6ef3d5735816b2e8545f958bc63132de5f7826e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66a47e3bb77297efb8402a1db6ef3d5735816b2e8545f958bc63132de5f7826e->enter($__internal_66a47e3bb77297efb8402a1db6ef3d5735816b2e8545f958bc63132de5f7826e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 56
        echo "        ";
        $this->loadTemplate("AppBundle:templates:footer.html.twig", "AppBundle::layout.html.twig", 56)->display($context);
        // line 57
        echo "    ";
        
        $__internal_66a47e3bb77297efb8402a1db6ef3d5735816b2e8545f958bc63132de5f7826e->leave($__internal_66a47e3bb77297efb8402a1db6ef3d5735816b2e8545f958bc63132de5f7826e_prof);

        
        $__internal_099ac9849e3c0e4bf60fecf36ef99553bfd00120badc53b062148c526fced3c0->leave($__internal_099ac9849e3c0e4bf60fecf36ef99553bfd00120badc53b062148c526fced3c0_prof);

    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6837bfbfd2bcd88ff7c8cc5d852625a1a3ce270d8de1af8e47fb8b36bf341f6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6837bfbfd2bcd88ff7c8cc5d852625a1a3ce270d8de1af8e47fb8b36bf341f6d->enter($__internal_6837bfbfd2bcd88ff7c8cc5d852625a1a3ce270d8de1af8e47fb8b36bf341f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9987e6f247054cf525be936442df979910d683510cdce4bd7e875964a4067b64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9987e6f247054cf525be936442df979910d683510cdce4bd7e875964a4067b64->enter($__internal_9987e6f247054cf525be936442df979910d683510cdce4bd7e875964a4067b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_9987e6f247054cf525be936442df979910d683510cdce4bd7e875964a4067b64->leave($__internal_9987e6f247054cf525be936442df979910d683510cdce4bd7e875964a4067b64_prof);

        
        $__internal_6837bfbfd2bcd88ff7c8cc5d852625a1a3ce270d8de1af8e47fb8b36bf341f6d->leave($__internal_6837bfbfd2bcd88ff7c8cc5d852625a1a3ce270d8de1af8e47fb8b36bf341f6d_prof);

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
