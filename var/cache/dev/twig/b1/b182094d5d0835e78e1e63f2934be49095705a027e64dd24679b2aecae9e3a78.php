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
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d6631b5c7bbb023c5e89ea2ff54df8cf6368553bd543090cae2fa5c0d1497309 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6631b5c7bbb023c5e89ea2ff54df8cf6368553bd543090cae2fa5c0d1497309->enter($__internal_d6631b5c7bbb023c5e89ea2ff54df8cf6368553bd543090cae2fa5c0d1497309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::layout.html.twig"));

        $__internal_6b804c33d49101238dd8d9f4aaab99b17a2449786cbaf830693a1a08d16707fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b804c33d49101238dd8d9f4aaab99b17a2449786cbaf830693a1a08d16707fa->enter($__internal_6b804c33d49101238dd8d9f4aaab99b17a2449786cbaf830693a1a08d16707fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::layout.html.twig"));

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

    ";
        // line 21
        $this->displayBlock('nav', $context, $blocks);
        // line 24
        echo "

    ";
        // line 26
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 27
            echo "    <ul id=\"slide-out\" class=\"side-nav\">
        <li><div class=\"user-view\">
                ";
            // line 29
            if ( !(null === $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "profilePic", array()))) {
                // line 30
                echo "                <img class=\"circle\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "profilePic", array()), "webPath", array())), "html", null, true);
                echo "\" style=\"width:50px;\">
                    ";
            } else {
                // line 32
                echo "                        <img class=\"circle\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/avatar.png"), "html", null, true);
                echo "\" style=\"width:50px;\">
                ";
            }
            // line 34
            echo "                <span class=\"white-text name menu\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</span>
                <span class=\"white-text email menu\">";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
            echo "</span>
            </div></li>
        <li><a href=\"";
            // line 37
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "\" class=\"menu\"><i class=\"material-icons\">account_circle</i>Edit my profile</a></li>
        <li><div class=\"divider\"></div></li>
        <li><a href=\"";
            // line 39
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\" class=\"menu\"><i class=\"material-icons\">exit_to_app</i>Logout</a></li>
    </ul>
    ";
        }
        // line 42
        echo "

";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
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
            // line 45
            $this->loadTemplate("AppBundle:templates:session-flashbag.html.twig", "AppBundle::layout.html.twig", 45)->display($context);
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
        // line 47
        echo "
    <div class=\"container\" id=\"content\">
    ";
        // line 49
        $this->displayBlock('body', $context, $blocks);
        // line 52
        echo "    </div>

    ";
        // line 54
        $this->displayBlock('footer', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('javascripts', $context, $blocks);
        // line 67
        echo "
 </html>";
        
        $__internal_d6631b5c7bbb023c5e89ea2ff54df8cf6368553bd543090cae2fa5c0d1497309->leave($__internal_d6631b5c7bbb023c5e89ea2ff54df8cf6368553bd543090cae2fa5c0d1497309_prof);

        
        $__internal_6b804c33d49101238dd8d9f4aaab99b17a2449786cbaf830693a1a08d16707fa->leave($__internal_6b804c33d49101238dd8d9f4aaab99b17a2449786cbaf830693a1a08d16707fa_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_2cb9148252cffea5cd9694114f30430bdd2699c1aa6182ecb3bd7e3ae18c75d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cb9148252cffea5cd9694114f30430bdd2699c1aa6182ecb3bd7e3ae18c75d0->enter($__internal_2cb9148252cffea5cd9694114f30430bdd2699c1aa6182ecb3bd7e3ae18c75d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4b9657ccaa4fde36830810a1539df558d45101861eb8a0f35d7a4e5eb016e4d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b9657ccaa4fde36830810a1539df558d45101861eb8a0f35d7a4e5eb016e4d9->enter($__internal_4b9657ccaa4fde36830810a1539df558d45101861eb8a0f35d7a4e5eb016e4d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SnowTricks - The snowboard tricks platform";
        
        $__internal_4b9657ccaa4fde36830810a1539df558d45101861eb8a0f35d7a4e5eb016e4d9->leave($__internal_4b9657ccaa4fde36830810a1539df558d45101861eb8a0f35d7a4e5eb016e4d9_prof);

        
        $__internal_2cb9148252cffea5cd9694114f30430bdd2699c1aa6182ecb3bd7e3ae18c75d0->leave($__internal_2cb9148252cffea5cd9694114f30430bdd2699c1aa6182ecb3bd7e3ae18c75d0_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ab688b89d535465606082140a203fcf74c1b50944ea029cbc682e74dd388b912 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab688b89d535465606082140a203fcf74c1b50944ea029cbc682e74dd388b912->enter($__internal_ab688b89d535465606082140a203fcf74c1b50944ea029cbc682e74dd388b912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1b51d60899d5317ed01d850b856221409fc89518ba717ece51e2e616ec9f93c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b51d60899d5317ed01d850b856221409fc89518ba717ece51e2e616ec9f93c1->enter($__internal_1b51d60899d5317ed01d850b856221409fc89518ba717ece51e2e616ec9f93c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_1b51d60899d5317ed01d850b856221409fc89518ba717ece51e2e616ec9f93c1->leave($__internal_1b51d60899d5317ed01d850b856221409fc89518ba717ece51e2e616ec9f93c1_prof);

        
        $__internal_ab688b89d535465606082140a203fcf74c1b50944ea029cbc682e74dd388b912->leave($__internal_ab688b89d535465606082140a203fcf74c1b50944ea029cbc682e74dd388b912_prof);

    }

    // line 21
    public function block_nav($context, array $blocks = array())
    {
        $__internal_2228a37aaaf3f2d12f3407212ee529ad670d292df1233cb0e74ed9fd0b52f181 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2228a37aaaf3f2d12f3407212ee529ad670d292df1233cb0e74ed9fd0b52f181->enter($__internal_2228a37aaaf3f2d12f3407212ee529ad670d292df1233cb0e74ed9fd0b52f181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_fe43ed4f9b938954957b9e0d3d844324311156bf1226e4ce1866c9213acecbfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe43ed4f9b938954957b9e0d3d844324311156bf1226e4ce1866c9213acecbfe->enter($__internal_fe43ed4f9b938954957b9e0d3d844324311156bf1226e4ce1866c9213acecbfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 22
        echo "        ";
        $this->loadTemplate("AppBundle:templates:navbar.html.twig", "AppBundle::layout.html.twig", 22)->display($context);
        // line 23
        echo "    ";
        
        $__internal_fe43ed4f9b938954957b9e0d3d844324311156bf1226e4ce1866c9213acecbfe->leave($__internal_fe43ed4f9b938954957b9e0d3d844324311156bf1226e4ce1866c9213acecbfe_prof);

        
        $__internal_2228a37aaaf3f2d12f3407212ee529ad670d292df1233cb0e74ed9fd0b52f181->leave($__internal_2228a37aaaf3f2d12f3407212ee529ad670d292df1233cb0e74ed9fd0b52f181_prof);

    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        $__internal_a35aec5a0a061353d7c8567a78f61d4747a0f8f73b3f2fc0fda11487945ac21a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a35aec5a0a061353d7c8567a78f61d4747a0f8f73b3f2fc0fda11487945ac21a->enter($__internal_a35aec5a0a061353d7c8567a78f61d4747a0f8f73b3f2fc0fda11487945ac21a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8bc0be83601f5c2931a840af785583bf5dd4dbfe7d0ad57fa3440dd5c8bd0fb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bc0be83601f5c2931a840af785583bf5dd4dbfe7d0ad57fa3440dd5c8bd0fb9->enter($__internal_8bc0be83601f5c2931a840af785583bf5dd4dbfe7d0ad57fa3440dd5c8bd0fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 50
        echo "
    ";
        
        $__internal_8bc0be83601f5c2931a840af785583bf5dd4dbfe7d0ad57fa3440dd5c8bd0fb9->leave($__internal_8bc0be83601f5c2931a840af785583bf5dd4dbfe7d0ad57fa3440dd5c8bd0fb9_prof);

        
        $__internal_a35aec5a0a061353d7c8567a78f61d4747a0f8f73b3f2fc0fda11487945ac21a->leave($__internal_a35aec5a0a061353d7c8567a78f61d4747a0f8f73b3f2fc0fda11487945ac21a_prof);

    }

    // line 54
    public function block_footer($context, array $blocks = array())
    {
        $__internal_4bfa800b9d100046d055962f43c9da61d7db88321a213ebf14f5b5235a72e55e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bfa800b9d100046d055962f43c9da61d7db88321a213ebf14f5b5235a72e55e->enter($__internal_4bfa800b9d100046d055962f43c9da61d7db88321a213ebf14f5b5235a72e55e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_cb7b5607b586d80eab24fa2eeb0f230da25fe6ab804f15a9d0b0f3f376be0643 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb7b5607b586d80eab24fa2eeb0f230da25fe6ab804f15a9d0b0f3f376be0643->enter($__internal_cb7b5607b586d80eab24fa2eeb0f230da25fe6ab804f15a9d0b0f3f376be0643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 55
        echo "        ";
        $this->loadTemplate("AppBundle:templates:footer.html.twig", "AppBundle::layout.html.twig", 55)->display($context);
        // line 56
        echo "    ";
        
        $__internal_cb7b5607b586d80eab24fa2eeb0f230da25fe6ab804f15a9d0b0f3f376be0643->leave($__internal_cb7b5607b586d80eab24fa2eeb0f230da25fe6ab804f15a9d0b0f3f376be0643_prof);

        
        $__internal_4bfa800b9d100046d055962f43c9da61d7db88321a213ebf14f5b5235a72e55e->leave($__internal_4bfa800b9d100046d055962f43c9da61d7db88321a213ebf14f5b5235a72e55e_prof);

    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_83107151cd4ddb979b7af9bcc9932a0a94201e6bba2326aa444c2808fcc228d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83107151cd4ddb979b7af9bcc9932a0a94201e6bba2326aa444c2808fcc228d4->enter($__internal_83107151cd4ddb979b7af9bcc9932a0a94201e6bba2326aa444c2808fcc228d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9f0737a6ec0b4645591eba37f04bac16e106ef9c68164a3bcc2748337d79b00c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f0737a6ec0b4645591eba37f04bac16e106ef9c68164a3bcc2748337d79b00c->enter($__internal_9f0737a6ec0b4645591eba37f04bac16e106ef9c68164a3bcc2748337d79b00c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 59
        echo "
    ";
        // line 60
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e158e02_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e158e02_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/e158e02_jquery-3.2.1.min_1.js");
            // line 63
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
        // line 65
        echo "
";
        
        $__internal_9f0737a6ec0b4645591eba37f04bac16e106ef9c68164a3bcc2748337d79b00c->leave($__internal_9f0737a6ec0b4645591eba37f04bac16e106ef9c68164a3bcc2748337d79b00c_prof);

        
        $__internal_83107151cd4ddb979b7af9bcc9932a0a94201e6bba2326aa444c2808fcc228d4->leave($__internal_83107151cd4ddb979b7af9bcc9932a0a94201e6bba2326aa444c2808fcc228d4_prof);

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
        return array (  333 => 65,  307 => 63,  303 => 60,  300 => 59,  291 => 58,  281 => 56,  278 => 55,  269 => 54,  258 => 50,  249 => 49,  239 => 23,  236 => 22,  227 => 21,  216 => 17,  196 => 15,  192 => 13,  189 => 12,  180 => 11,  162 => 8,  151 => 67,  149 => 58,  146 => 57,  144 => 54,  140 => 52,  138 => 49,  134 => 47,  120 => 45,  103 => 44,  99 => 42,  93 => 39,  88 => 37,  83 => 35,  78 => 34,  72 => 32,  66 => 30,  64 => 29,  60 => 27,  58 => 26,  54 => 24,  52 => 21,  48 => 19,  46 => 11,  40 => 8,  31 => 1,);
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

 </html>", "AppBundle::layout.html.twig", "/Applications/MAMP/htdocs/SnowTricks/src/AppBundle/Resources/views/layout.html.twig");
    }
}
