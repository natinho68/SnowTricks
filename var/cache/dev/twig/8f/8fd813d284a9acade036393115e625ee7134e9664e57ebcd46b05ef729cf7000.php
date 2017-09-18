<?php

/* UserBundle:Profile:edit.html.twig */
class __TwigTemplate_dc265bafac2c1f716a9f87c703e742e29d919751276d3bc9ca2c1ef648d59478 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "UserBundle:Profile:edit.html.twig", 1);
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
        $__internal_4494f267d47c0c0b407522d894813f9351e91741ce060376532e10802d075fba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4494f267d47c0c0b407522d894813f9351e91741ce060376532e10802d075fba->enter($__internal_4494f267d47c0c0b407522d894813f9351e91741ce060376532e10802d075fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:edit.html.twig"));

        $__internal_64c88e96b898f241fdbb44a3d9de3216c11d053a18d2ab716ddb8459e984e69c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64c88e96b898f241fdbb44a3d9de3216c11d053a18d2ab716ddb8459e984e69c->enter($__internal_64c88e96b898f241fdbb44a3d9de3216c11d053a18d2ab716ddb8459e984e69c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4494f267d47c0c0b407522d894813f9351e91741ce060376532e10802d075fba->leave($__internal_4494f267d47c0c0b407522d894813f9351e91741ce060376532e10802d075fba_prof);

        
        $__internal_64c88e96b898f241fdbb44a3d9de3216c11d053a18d2ab716ddb8459e984e69c->leave($__internal_64c88e96b898f241fdbb44a3d9de3216c11d053a18d2ab716ddb8459e984e69c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_261fd32d1ca8ab2215994a11081b472ff307c95beb447389aac230e7e4cab662 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_261fd32d1ca8ab2215994a11081b472ff307c95beb447389aac230e7e4cab662->enter($__internal_261fd32d1ca8ab2215994a11081b472ff307c95beb447389aac230e7e4cab662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_497ef94205a73faa13f39f2158d4603a995f575c9eb8342dee15c539240baca3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_497ef94205a73faa13f39f2158d4603a995f575c9eb8342dee15c539240baca3->enter($__internal_497ef94205a73faa13f39f2158d4603a995f575c9eb8342dee15c539240baca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "UserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_497ef94205a73faa13f39f2158d4603a995f575c9eb8342dee15c539240baca3->leave($__internal_497ef94205a73faa13f39f2158d4603a995f575c9eb8342dee15c539240baca3_prof);

        
        $__internal_261fd32d1ca8ab2215994a11081b472ff307c95beb447389aac230e7e4cab662->leave($__internal_261fd32d1ca8ab2215994a11081b472ff307c95beb447389aac230e7e4cab662_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "UserBundle:Profile:edit.html.twig", "/Applications/MAMP/htdocs/SnowTricks/src/UserBundle/Resources/views/Profile/edit.html.twig");
    }
}
