<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_d7477e85ff500e2feb3384e4772495977957dfde0ac620b81004c083288b09e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a4974956a79676dc284105453422245f3b27e357e19832bac03e87b3361436d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a4974956a79676dc284105453422245f3b27e357e19832bac03e87b3361436d->enter($__internal_5a4974956a79676dc284105453422245f3b27e357e19832bac03e87b3361436d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_c35afe66007950ef09d035e505a6eba27dbf52ea6f6965113d855167c6eac076 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c35afe66007950ef09d035e505a6eba27dbf52ea6f6965113d855167c6eac076->enter($__internal_c35afe66007950ef09d035e505a6eba27dbf52ea6f6965113d855167c6eac076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a4974956a79676dc284105453422245f3b27e357e19832bac03e87b3361436d->leave($__internal_5a4974956a79676dc284105453422245f3b27e357e19832bac03e87b3361436d_prof);

        
        $__internal_c35afe66007950ef09d035e505a6eba27dbf52ea6f6965113d855167c6eac076->leave($__internal_c35afe66007950ef09d035e505a6eba27dbf52ea6f6965113d855167c6eac076_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c73ca40d232d9ca62419d4da933241d1374d5e863b56db20bca64490146f2919 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c73ca40d232d9ca62419d4da933241d1374d5e863b56db20bca64490146f2919->enter($__internal_c73ca40d232d9ca62419d4da933241d1374d5e863b56db20bca64490146f2919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a038711ee4cbb9ee49832b2eaaacc02700cefb2143b7f3b16297e06d1b5e3d44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a038711ee4cbb9ee49832b2eaaacc02700cefb2143b7f3b16297e06d1b5e3d44->enter($__internal_a038711ee4cbb9ee49832b2eaaacc02700cefb2143b7f3b16297e06d1b5e3d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_a038711ee4cbb9ee49832b2eaaacc02700cefb2143b7f3b16297e06d1b5e3d44->leave($__internal_a038711ee4cbb9ee49832b2eaaacc02700cefb2143b7f3b16297e06d1b5e3d44_prof);

        
        $__internal_c73ca40d232d9ca62419d4da933241d1374d5e863b56db20bca64490146f2919->leave($__internal_c73ca40d232d9ca62419d4da933241d1374d5e863b56db20bca64490146f2919_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
