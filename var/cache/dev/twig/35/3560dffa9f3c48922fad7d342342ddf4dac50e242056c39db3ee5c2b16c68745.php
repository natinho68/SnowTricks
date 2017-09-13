<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_d5f2eaef80767f375a47816037a9fad7e42eedff83d6802fa7deb1b76fd187f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_3e32ed15de1562087a3a9d7132e9e3321c389519e6d28506041572ba8553f4fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e32ed15de1562087a3a9d7132e9e3321c389519e6d28506041572ba8553f4fd->enter($__internal_3e32ed15de1562087a3a9d7132e9e3321c389519e6d28506041572ba8553f4fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_a74b0ebb6798ef1f3b671d094128266900c2cb9197551325454c653e7982be82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a74b0ebb6798ef1f3b671d094128266900c2cb9197551325454c653e7982be82->enter($__internal_a74b0ebb6798ef1f3b671d094128266900c2cb9197551325454c653e7982be82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e32ed15de1562087a3a9d7132e9e3321c389519e6d28506041572ba8553f4fd->leave($__internal_3e32ed15de1562087a3a9d7132e9e3321c389519e6d28506041572ba8553f4fd_prof);

        
        $__internal_a74b0ebb6798ef1f3b671d094128266900c2cb9197551325454c653e7982be82->leave($__internal_a74b0ebb6798ef1f3b671d094128266900c2cb9197551325454c653e7982be82_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_53a6ebdbc9ed6513b6484896ad441e62fb4e14a56c72647b3191f7e360ef877d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53a6ebdbc9ed6513b6484896ad441e62fb4e14a56c72647b3191f7e360ef877d->enter($__internal_53a6ebdbc9ed6513b6484896ad441e62fb4e14a56c72647b3191f7e360ef877d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_96eb6891b90ff967b1ff96c1904927f3c9549300de8e35c12dc9c53149e4dbb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96eb6891b90ff967b1ff96c1904927f3c9549300de8e35c12dc9c53149e4dbb6->enter($__internal_96eb6891b90ff967b1ff96c1904927f3c9549300de8e35c12dc9c53149e4dbb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_96eb6891b90ff967b1ff96c1904927f3c9549300de8e35c12dc9c53149e4dbb6->leave($__internal_96eb6891b90ff967b1ff96c1904927f3c9549300de8e35c12dc9c53149e4dbb6_prof);

        
        $__internal_53a6ebdbc9ed6513b6484896ad441e62fb4e14a56c72647b3191f7e360ef877d->leave($__internal_53a6ebdbc9ed6513b6484896ad441e62fb4e14a56c72647b3191f7e360ef877d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
