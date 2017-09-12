<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_34d1c48f3841aed47406a42f1d6d8a993b8f6800f37ef9d589a6f4b9552c68c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "TwigBundle:Exception:error.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_178cc2f8719e31051855ab199c942716f5ea6f694a2190fd0e621a6d8d8309c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_178cc2f8719e31051855ab199c942716f5ea6f694a2190fd0e621a6d8d8309c9->enter($__internal_178cc2f8719e31051855ab199c942716f5ea6f694a2190fd0e621a6d8d8309c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        $__internal_fbd16e413d0b6f8a670b18d6000a1fba38d491ad2d5b1662b448a75b34c47552 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbd16e413d0b6f8a670b18d6000a1fba38d491ad2d5b1662b448a75b34c47552->enter($__internal_fbd16e413d0b6f8a670b18d6000a1fba38d491ad2d5b1662b448a75b34c47552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_178cc2f8719e31051855ab199c942716f5ea6f694a2190fd0e621a6d8d8309c9->leave($__internal_178cc2f8719e31051855ab199c942716f5ea6f694a2190fd0e621a6d8d8309c9_prof);

        
        $__internal_fbd16e413d0b6f8a670b18d6000a1fba38d491ad2d5b1662b448a75b34c47552->leave($__internal_fbd16e413d0b6f8a670b18d6000a1fba38d491ad2d5b1662b448a75b34c47552_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_221d604993773da2dd92b4126a5f595a9080f5e88ffed040e0385f770013740b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_221d604993773da2dd92b4126a5f595a9080f5e88ffed040e0385f770013740b->enter($__internal_221d604993773da2dd92b4126a5f595a9080f5e88ffed040e0385f770013740b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_63e3abb0597e94df52127417fd29e8f9518ae19e4e090620fd85442b596091b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63e3abb0597e94df52127417fd29e8f9518ae19e4e090620fd85442b596091b9->enter($__internal_63e3abb0597e94df52127417fd29e8f9518ae19e4e090620fd85442b596091b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    404 Not Found ! - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_63e3abb0597e94df52127417fd29e8f9518ae19e4e090620fd85442b596091b9->leave($__internal_63e3abb0597e94df52127417fd29e8f9518ae19e4e090620fd85442b596091b9_prof);

        
        $__internal_221d604993773da2dd92b4126a5f595a9080f5e88ffed040e0385f770013740b->leave($__internal_221d604993773da2dd92b4126a5f595a9080f5e88ffed040e0385f770013740b_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec09c0c6bdb9f29b8b83c95dce49c9655419ef170cb179671b0b699a56f9719f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec09c0c6bdb9f29b8b83c95dce49c9655419ef170cb179671b0b699a56f9719f->enter($__internal_ec09c0c6bdb9f29b8b83c95dce49c9655419ef170cb179671b0b699a56f9719f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_58334b1781dc367fbce95ada0554390a7290bbc0f68feddbfee8c4d3d1517b75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58334b1781dc367fbce95ada0554390a7290bbc0f68feddbfee8c4d3d1517b75->enter($__internal_58334b1781dc367fbce95ada0554390a7290bbc0f68feddbfee8c4d3d1517b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"slider home\">
        <ul class=\"slides home\">
            <li>
                <img class=\"responsive-img\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/lost.jpg"), "html", null, true);
        echo "\">
                <div class=\"caption center-align\">
                    <h2>Are you lost in the mountain ?</h2>
                    <h3>The server returned a \"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\".</h3>
                    <h5 class=\"light grey-text text-lighten-3\"> Something is broken. Please e-mail us at <a href=\"mailto:nathan.meyer-pro@live.fr\">nathan.meyer-pro@live.fr</a> and let us know what you were doing when this error occurred. We will fix it as soon as possible. Sorry for any inconvenience caused.</h5>
                    <div><br><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"waves-effect black btn\"><i class=\"material-icons left\">home</i>
                            Back to the home page
                        </a></div>
                </div>
            </li>
        </ul>
    </div>


";
        
        $__internal_58334b1781dc367fbce95ada0554390a7290bbc0f68feddbfee8c4d3d1517b75->leave($__internal_58334b1781dc367fbce95ada0554390a7290bbc0f68feddbfee8c4d3d1517b75_prof);

        
        $__internal_ec09c0c6bdb9f29b8b83c95dce49c9655419ef170cb179671b0b699a56f9719f->leave($__internal_ec09c0c6bdb9f29b8b83c95dce49c9655419ef170cb179671b0b699a56f9719f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 16,  83 => 14,  77 => 11,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppBundle::layout.html.twig\" %}

{% block title %}
    404 Not Found ! - {{ parent() }}
{% endblock %}

{% block body %}
    <div class=\"slider home\">
        <ul class=\"slides home\">
            <li>
                <img class=\"responsive-img\" src=\"{{ asset('uploads/img/lost.jpg') }}\">
                <div class=\"caption center-align\">
                    <h2>Are you lost in the mountain ?</h2>
                    <h3>The server returned a \"{{ status_code }} {{ status_text }}\".</h3>
                    <h5 class=\"light grey-text text-lighten-3\"> Something is broken. Please e-mail us at <a href=\"mailto:nathan.meyer-pro@live.fr\">nathan.meyer-pro@live.fr</a> and let us know what you were doing when this error occurred. We will fix it as soon as possible. Sorry for any inconvenience caused.</h5>
                    <div><br><a href=\"{{ path('homepage') }}\" class=\"waves-effect black btn\"><i class=\"material-icons left\">home</i>
                            Back to the home page
                        </a></div>
                </div>
            </li>
        </ul>
    </div>


{% endblock %}
", "TwigBundle:Exception:error.html.twig", "/Applications/MAMP/htdocs/SnowTricks/app/Resources/TwigBundle/views/Exception/error.html.twig");
    }
}
