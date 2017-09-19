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
        $__internal_b6419b358e8bf904f466922af641d074d03f736d53667caad999312cf5379799 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6419b358e8bf904f466922af641d074d03f736d53667caad999312cf5379799->enter($__internal_b6419b358e8bf904f466922af641d074d03f736d53667caad999312cf5379799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_bba3229ac2d36e644e416bc72d1e24a498c4b6fda233f831d118fb6be2d76791 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bba3229ac2d36e644e416bc72d1e24a498c4b6fda233f831d118fb6be2d76791->enter($__internal_bba3229ac2d36e644e416bc72d1e24a498c4b6fda233f831d118fb6be2d76791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6419b358e8bf904f466922af641d074d03f736d53667caad999312cf5379799->leave($__internal_b6419b358e8bf904f466922af641d074d03f736d53667caad999312cf5379799_prof);

        
        $__internal_bba3229ac2d36e644e416bc72d1e24a498c4b6fda233f831d118fb6be2d76791->leave($__internal_bba3229ac2d36e644e416bc72d1e24a498c4b6fda233f831d118fb6be2d76791_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2b04c9ed6602b00703bca2e06f5ca7751d88ff1913c244836ab7015bb6dc9413 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b04c9ed6602b00703bca2e06f5ca7751d88ff1913c244836ab7015bb6dc9413->enter($__internal_2b04c9ed6602b00703bca2e06f5ca7751d88ff1913c244836ab7015bb6dc9413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_771447f432261dfb904d43757b6c7bed50faecacbb218fa5ccb307591965fa5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_771447f432261dfb904d43757b6c7bed50faecacbb218fa5ccb307591965fa5f->enter($__internal_771447f432261dfb904d43757b6c7bed50faecacbb218fa5ccb307591965fa5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_771447f432261dfb904d43757b6c7bed50faecacbb218fa5ccb307591965fa5f->leave($__internal_771447f432261dfb904d43757b6c7bed50faecacbb218fa5ccb307591965fa5f_prof);

        
        $__internal_2b04c9ed6602b00703bca2e06f5ca7751d88ff1913c244836ab7015bb6dc9413->leave($__internal_2b04c9ed6602b00703bca2e06f5ca7751d88ff1913c244836ab7015bb6dc9413_prof);

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
