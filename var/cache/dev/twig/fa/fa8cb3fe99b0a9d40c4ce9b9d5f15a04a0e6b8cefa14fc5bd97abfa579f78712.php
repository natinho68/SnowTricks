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
        $__internal_1f98cc7dd787366813ab70581ea51afa439224ed59aeb5609caf98384e10d602 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f98cc7dd787366813ab70581ea51afa439224ed59aeb5609caf98384e10d602->enter($__internal_1f98cc7dd787366813ab70581ea51afa439224ed59aeb5609caf98384e10d602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::layout.html.twig"));

        $__internal_d52b06897471d7e3d4704b1421a63bd0101abe10f82705a986a0b9ae3183e693 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d52b06897471d7e3d4704b1421a63bd0101abe10f82705a986a0b9ae3183e693->enter($__internal_d52b06897471d7e3d4704b1421a63bd0101abe10f82705a986a0b9ae3183e693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::layout.html.twig"));

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
            if ( !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "profilePic", array()))) {
                // line 30
                echo "                <img class=\"circle\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "profilePic", array()), "webPath", array())), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</span>
                <span class=\"white-text email menu\">";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
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
 </html>
";
        
        $__internal_1f98cc7dd787366813ab70581ea51afa439224ed59aeb5609caf98384e10d602->leave($__internal_1f98cc7dd787366813ab70581ea51afa439224ed59aeb5609caf98384e10d602_prof);

        
        $__internal_d52b06897471d7e3d4704b1421a63bd0101abe10f82705a986a0b9ae3183e693->leave($__internal_d52b06897471d7e3d4704b1421a63bd0101abe10f82705a986a0b9ae3183e693_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_d3a5cb15f5dd01b1683b96487fab8d3ce8c5174c2f1778c10a6a8e89052ca6b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3a5cb15f5dd01b1683b96487fab8d3ce8c5174c2f1778c10a6a8e89052ca6b7->enter($__internal_d3a5cb15f5dd01b1683b96487fab8d3ce8c5174c2f1778c10a6a8e89052ca6b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c5aa6e13abc6a62e731464c2ebf102c6483532107802ab8a05e35f27df9d74a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5aa6e13abc6a62e731464c2ebf102c6483532107802ab8a05e35f27df9d74a3->enter($__internal_c5aa6e13abc6a62e731464c2ebf102c6483532107802ab8a05e35f27df9d74a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SnowTricks - The snowboard tricks platform";
        
        $__internal_c5aa6e13abc6a62e731464c2ebf102c6483532107802ab8a05e35f27df9d74a3->leave($__internal_c5aa6e13abc6a62e731464c2ebf102c6483532107802ab8a05e35f27df9d74a3_prof);

        
        $__internal_d3a5cb15f5dd01b1683b96487fab8d3ce8c5174c2f1778c10a6a8e89052ca6b7->leave($__internal_d3a5cb15f5dd01b1683b96487fab8d3ce8c5174c2f1778c10a6a8e89052ca6b7_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4ab06e6642ca6c5e0bd12465b559a4ae61b65746aed365e95714e6d46f8a77f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ab06e6642ca6c5e0bd12465b559a4ae61b65746aed365e95714e6d46f8a77f5->enter($__internal_4ab06e6642ca6c5e0bd12465b559a4ae61b65746aed365e95714e6d46f8a77f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7bd59a364b53c26f51bff62dcfd007407075086d09f86a7bd5e4463c7c2fd81f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bd59a364b53c26f51bff62dcfd007407075086d09f86a7bd5e4463c7c2fd81f->enter($__internal_7bd59a364b53c26f51bff62dcfd007407075086d09f86a7bd5e4463c7c2fd81f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_7bd59a364b53c26f51bff62dcfd007407075086d09f86a7bd5e4463c7c2fd81f->leave($__internal_7bd59a364b53c26f51bff62dcfd007407075086d09f86a7bd5e4463c7c2fd81f_prof);

        
        $__internal_4ab06e6642ca6c5e0bd12465b559a4ae61b65746aed365e95714e6d46f8a77f5->leave($__internal_4ab06e6642ca6c5e0bd12465b559a4ae61b65746aed365e95714e6d46f8a77f5_prof);

    }

    // line 21
    public function block_nav($context, array $blocks = array())
    {
        $__internal_4a510c53efe99158713a8fecfc32e5a3d85d7a72a7d96a5bddfed6f8c02387cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a510c53efe99158713a8fecfc32e5a3d85d7a72a7d96a5bddfed6f8c02387cd->enter($__internal_4a510c53efe99158713a8fecfc32e5a3d85d7a72a7d96a5bddfed6f8c02387cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_4a742ec60f2859b0c6bbec5ea2b867ae4ed78842563a86b01d0bb536f35df962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a742ec60f2859b0c6bbec5ea2b867ae4ed78842563a86b01d0bb536f35df962->enter($__internal_4a742ec60f2859b0c6bbec5ea2b867ae4ed78842563a86b01d0bb536f35df962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 22
        echo "        ";
        $this->loadTemplate("AppBundle:templates:navbar.html.twig", "AppBundle::layout.html.twig", 22)->display($context);
        // line 23
        echo "    ";
        
        $__internal_4a742ec60f2859b0c6bbec5ea2b867ae4ed78842563a86b01d0bb536f35df962->leave($__internal_4a742ec60f2859b0c6bbec5ea2b867ae4ed78842563a86b01d0bb536f35df962_prof);

        
        $__internal_4a510c53efe99158713a8fecfc32e5a3d85d7a72a7d96a5bddfed6f8c02387cd->leave($__internal_4a510c53efe99158713a8fecfc32e5a3d85d7a72a7d96a5bddfed6f8c02387cd_prof);

    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb4bf9b066d5ffdbe987b59c523f1ab27663dc25be4d89ddd53014434f637740 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb4bf9b066d5ffdbe987b59c523f1ab27663dc25be4d89ddd53014434f637740->enter($__internal_cb4bf9b066d5ffdbe987b59c523f1ab27663dc25be4d89ddd53014434f637740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_31847fcb5b00fcac52ff954bd88adfd4bf356de42a580a1c36a823d46c3e4a5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31847fcb5b00fcac52ff954bd88adfd4bf356de42a580a1c36a823d46c3e4a5d->enter($__internal_31847fcb5b00fcac52ff954bd88adfd4bf356de42a580a1c36a823d46c3e4a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 50
        echo "
    ";
        
        $__internal_31847fcb5b00fcac52ff954bd88adfd4bf356de42a580a1c36a823d46c3e4a5d->leave($__internal_31847fcb5b00fcac52ff954bd88adfd4bf356de42a580a1c36a823d46c3e4a5d_prof);

        
        $__internal_cb4bf9b066d5ffdbe987b59c523f1ab27663dc25be4d89ddd53014434f637740->leave($__internal_cb4bf9b066d5ffdbe987b59c523f1ab27663dc25be4d89ddd53014434f637740_prof);

    }

    // line 54
    public function block_footer($context, array $blocks = array())
    {
        $__internal_1872ef1534d09c6c24c712bb8f2da6e3cb76768752b7466d7acc70dcd23726a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1872ef1534d09c6c24c712bb8f2da6e3cb76768752b7466d7acc70dcd23726a7->enter($__internal_1872ef1534d09c6c24c712bb8f2da6e3cb76768752b7466d7acc70dcd23726a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_77e8d512c5da6d6e2c04c802470f4f1bab71b05967c83ab3b7e20cb61021cea6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77e8d512c5da6d6e2c04c802470f4f1bab71b05967c83ab3b7e20cb61021cea6->enter($__internal_77e8d512c5da6d6e2c04c802470f4f1bab71b05967c83ab3b7e20cb61021cea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 55
        echo "        ";
        $this->loadTemplate("AppBundle:templates:footer.html.twig", "AppBundle::layout.html.twig", 55)->display($context);
        // line 56
        echo "    ";
        
        $__internal_77e8d512c5da6d6e2c04c802470f4f1bab71b05967c83ab3b7e20cb61021cea6->leave($__internal_77e8d512c5da6d6e2c04c802470f4f1bab71b05967c83ab3b7e20cb61021cea6_prof);

        
        $__internal_1872ef1534d09c6c24c712bb8f2da6e3cb76768752b7466d7acc70dcd23726a7->leave($__internal_1872ef1534d09c6c24c712bb8f2da6e3cb76768752b7466d7acc70dcd23726a7_prof);

    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_601a172897236f7ab7cc14e67c7c643126809f1ab48a7646863b27deeb8097b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_601a172897236f7ab7cc14e67c7c643126809f1ab48a7646863b27deeb8097b2->enter($__internal_601a172897236f7ab7cc14e67c7c643126809f1ab48a7646863b27deeb8097b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_90ae8621a3d10fb1cdc9923a8d434774dd3e743da8f8dfe42deb1db67c108a99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90ae8621a3d10fb1cdc9923a8d434774dd3e743da8f8dfe42deb1db67c108a99->enter($__internal_90ae8621a3d10fb1cdc9923a8d434774dd3e743da8f8dfe42deb1db67c108a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 59
        echo "
    ";
        // line 60
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e158e02_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e158e02_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/e158e02_jquery-3.2.1.min_1.js");
            // line 63
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
        // line 65
        echo "
";
        
        $__internal_90ae8621a3d10fb1cdc9923a8d434774dd3e743da8f8dfe42deb1db67c108a99->leave($__internal_90ae8621a3d10fb1cdc9923a8d434774dd3e743da8f8dfe42deb1db67c108a99_prof);

        
        $__internal_601a172897236f7ab7cc14e67c7c643126809f1ab48a7646863b27deeb8097b2->leave($__internal_601a172897236f7ab7cc14e67c7c643126809f1ab48a7646863b27deeb8097b2_prof);

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
        return array (  334 => 65,  308 => 63,  304 => 60,  301 => 59,  292 => 58,  282 => 56,  279 => 55,  270 => 54,  259 => 50,  250 => 49,  240 => 23,  237 => 22,  228 => 21,  217 => 17,  197 => 15,  193 => 13,  190 => 12,  181 => 11,  163 => 8,  151 => 67,  149 => 58,  146 => 57,  144 => 54,  140 => 52,  138 => 49,  134 => 47,  120 => 45,  103 => 44,  99 => 42,  93 => 39,  88 => 37,  83 => 35,  78 => 34,  72 => 32,  66 => 30,  64 => 29,  60 => 27,  58 => 26,  54 => 24,  52 => 21,  48 => 19,  46 => 11,  40 => 8,  31 => 1,);
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

 </html>
", "AppBundle::layout.html.twig", "/Applications/MAMP/htdocs/SnowTricks/src/AppBundle/Resources/views/layout.html.twig");
    }
}
