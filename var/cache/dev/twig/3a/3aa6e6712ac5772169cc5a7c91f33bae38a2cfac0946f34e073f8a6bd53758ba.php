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
        $__internal_747fdd6b9869904397a5303c52d640495f933460a50cabb9db5ab904b83759ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_747fdd6b9869904397a5303c52d640495f933460a50cabb9db5ab904b83759ca->enter($__internal_747fdd6b9869904397a5303c52d640495f933460a50cabb9db5ab904b83759ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        $__internal_1263f79d66ac6337fac2b3119a74415ed224de933eb0f82c1ea765e769ba9fc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1263f79d66ac6337fac2b3119a74415ed224de933eb0f82c1ea765e769ba9fc1->enter($__internal_1263f79d66ac6337fac2b3119a74415ed224de933eb0f82c1ea765e769ba9fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_747fdd6b9869904397a5303c52d640495f933460a50cabb9db5ab904b83759ca->leave($__internal_747fdd6b9869904397a5303c52d640495f933460a50cabb9db5ab904b83759ca_prof);

        
        $__internal_1263f79d66ac6337fac2b3119a74415ed224de933eb0f82c1ea765e769ba9fc1->leave($__internal_1263f79d66ac6337fac2b3119a74415ed224de933eb0f82c1ea765e769ba9fc1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c750a565c1cf0a45b9a7b12ee61d6e401a1e56482a5fa43c876f72e73b55157 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c750a565c1cf0a45b9a7b12ee61d6e401a1e56482a5fa43c876f72e73b55157->enter($__internal_8c750a565c1cf0a45b9a7b12ee61d6e401a1e56482a5fa43c876f72e73b55157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_715bec1669e08c17bc7f8da6ec30edcfe519e75458de1b7218cf317d5794e9bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_715bec1669e08c17bc7f8da6ec30edcfe519e75458de1b7218cf317d5794e9bc->enter($__internal_715bec1669e08c17bc7f8da6ec30edcfe519e75458de1b7218cf317d5794e9bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    404 Not Found ! - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_715bec1669e08c17bc7f8da6ec30edcfe519e75458de1b7218cf317d5794e9bc->leave($__internal_715bec1669e08c17bc7f8da6ec30edcfe519e75458de1b7218cf317d5794e9bc_prof);

        
        $__internal_8c750a565c1cf0a45b9a7b12ee61d6e401a1e56482a5fa43c876f72e73b55157->leave($__internal_8c750a565c1cf0a45b9a7b12ee61d6e401a1e56482a5fa43c876f72e73b55157_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ff8509005f7b8418e090219608e2156d7294bb616c11322525c044b491a897c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ff8509005f7b8418e090219608e2156d7294bb616c11322525c044b491a897c->enter($__internal_5ff8509005f7b8418e090219608e2156d7294bb616c11322525c044b491a897c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4c6f62adfc253ac8d10f5ff75f76654e58051dbae5155bb9f58280649b81672b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c6f62adfc253ac8d10f5ff75f76654e58051dbae5155bb9f58280649b81672b->enter($__internal_4c6f62adfc253ac8d10f5ff75f76654e58051dbae5155bb9f58280649b81672b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4c6f62adfc253ac8d10f5ff75f76654e58051dbae5155bb9f58280649b81672b->leave($__internal_4c6f62adfc253ac8d10f5ff75f76654e58051dbae5155bb9f58280649b81672b_prof);

        
        $__internal_5ff8509005f7b8418e090219608e2156d7294bb616c11322525c044b491a897c->leave($__internal_5ff8509005f7b8418e090219608e2156d7294bb616c11322525c044b491a897c_prof);

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
