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
        $__internal_b5f5ee805d086c473209341c43ecd0b6ee71c707f40e8c130704b887f60cc621 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5f5ee805d086c473209341c43ecd0b6ee71c707f40e8c130704b887f60cc621->enter($__internal_b5f5ee805d086c473209341c43ecd0b6ee71c707f40e8c130704b887f60cc621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        $__internal_224fdabc11df73f99822140e4a489e2392aa20fb0436464ff1231247f6c3cecf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_224fdabc11df73f99822140e4a489e2392aa20fb0436464ff1231247f6c3cecf->enter($__internal_224fdabc11df73f99822140e4a489e2392aa20fb0436464ff1231247f6c3cecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5f5ee805d086c473209341c43ecd0b6ee71c707f40e8c130704b887f60cc621->leave($__internal_b5f5ee805d086c473209341c43ecd0b6ee71c707f40e8c130704b887f60cc621_prof);

        
        $__internal_224fdabc11df73f99822140e4a489e2392aa20fb0436464ff1231247f6c3cecf->leave($__internal_224fdabc11df73f99822140e4a489e2392aa20fb0436464ff1231247f6c3cecf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f71451907fdf2e43031babbc79856d7b698a8334d2a01499884f76b3a01491c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f71451907fdf2e43031babbc79856d7b698a8334d2a01499884f76b3a01491c3->enter($__internal_f71451907fdf2e43031babbc79856d7b698a8334d2a01499884f76b3a01491c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e1531b5aa3a30399c0e14200daf040bdc2f71d976e0956f29fc3b604d1d8d0f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1531b5aa3a30399c0e14200daf040bdc2f71d976e0956f29fc3b604d1d8d0f2->enter($__internal_e1531b5aa3a30399c0e14200daf040bdc2f71d976e0956f29fc3b604d1d8d0f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    404 Not Found ! - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e1531b5aa3a30399c0e14200daf040bdc2f71d976e0956f29fc3b604d1d8d0f2->leave($__internal_e1531b5aa3a30399c0e14200daf040bdc2f71d976e0956f29fc3b604d1d8d0f2_prof);

        
        $__internal_f71451907fdf2e43031babbc79856d7b698a8334d2a01499884f76b3a01491c3->leave($__internal_f71451907fdf2e43031babbc79856d7b698a8334d2a01499884f76b3a01491c3_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a1e7f3a3decade89e3878665aadf8dccf16a95a21ac615f2a22bd905699347f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a1e7f3a3decade89e3878665aadf8dccf16a95a21ac615f2a22bd905699347f->enter($__internal_8a1e7f3a3decade89e3878665aadf8dccf16a95a21ac615f2a22bd905699347f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_38fdc6ad8bb155483907dbaff4d3ad37de2788a803e7e2fa0e998f4d6de2ed55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38fdc6ad8bb155483907dbaff4d3ad37de2788a803e7e2fa0e998f4d6de2ed55->enter($__internal_38fdc6ad8bb155483907dbaff4d3ad37de2788a803e7e2fa0e998f4d6de2ed55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_38fdc6ad8bb155483907dbaff4d3ad37de2788a803e7e2fa0e998f4d6de2ed55->leave($__internal_38fdc6ad8bb155483907dbaff4d3ad37de2788a803e7e2fa0e998f4d6de2ed55_prof);

        
        $__internal_8a1e7f3a3decade89e3878665aadf8dccf16a95a21ac615f2a22bd905699347f->leave($__internal_8a1e7f3a3decade89e3878665aadf8dccf16a95a21ac615f2a22bd905699347f_prof);

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
