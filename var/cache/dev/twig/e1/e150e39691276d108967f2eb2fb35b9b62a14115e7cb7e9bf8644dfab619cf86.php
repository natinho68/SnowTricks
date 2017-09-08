<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_0a7512edf6f4808b273813a7ef455f798a292626c94de79797ff8de0b338309d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ce55ee64e548119c7747a8d79fdbe9cca1ba9b718ae77aadf7e369e7853363b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ce55ee64e548119c7747a8d79fdbe9cca1ba9b718ae77aadf7e369e7853363b->enter($__internal_2ce55ee64e548119c7747a8d79fdbe9cca1ba9b718ae77aadf7e369e7853363b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_2ec603021fa62fba8f6122039ea119bb0da7984af20c74f14278985cf6d1aefa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ec603021fa62fba8f6122039ea119bb0da7984af20c74f14278985cf6d1aefa->enter($__internal_2ec603021fa62fba8f6122039ea119bb0da7984af20c74f14278985cf6d1aefa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
    <h3>My profile</h3>
    <div class=\"fos_user_user_show\">
        <p><b>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</b>: ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
        <p><b>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo "</b>: ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
        ";
        // line 7
        if ((null === $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "profilePic", array()))) {
            // line 8
            echo "            <p><b>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Profile picture", array(), "FOSUserBundle"), "html", null, true);
            echo "</b>: No personal profile picture added</p>
            ";
        } else {
            // line 10
            echo "                <p><b>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Profile picture", array(), "FOSUserBundle"), "html", null, true);
            echo "</b>: <img class=\"img-responsive\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "profilePic", array()), "webPath", array())), "html", null, true);
            echo "\" width=\"50\" height=\"50\"></p>
        ";
        }
        // line 12
        echo "
        <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"waves-effect black white-text btn\">Back to home</a>

</div>
";
        
        $__internal_2ce55ee64e548119c7747a8d79fdbe9cca1ba9b718ae77aadf7e369e7853363b->leave($__internal_2ce55ee64e548119c7747a8d79fdbe9cca1ba9b718ae77aadf7e369e7853363b_prof);

        
        $__internal_2ec603021fa62fba8f6122039ea119bb0da7984af20c74f14278985cf6d1aefa->leave($__internal_2ec603021fa62fba8f6122039ea119bb0da7984af20c74f14278985cf6d1aefa_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 13,  58 => 12,  50 => 10,  44 => 8,  42 => 7,  36 => 6,  30 => 5,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

    <h3>My profile</h3>
    <div class=\"fos_user_user_show\">
        <p><b>{{ 'profile.show.username'|trans }}</b>: {{ user.username }}</p>
        <p><b>{{ 'profile.show.email'|trans }}</b>: {{ user.email }}</p>
        {% if user.profilePic is  null %}
            <p><b>{{ 'Profile picture'|trans }}</b>: No personal profile picture added</p>
            {% else %}
                <p><b>{{ 'Profile picture'|trans }}</b>: <img class=\"img-responsive\" src=\"{{ asset(user.profilePic.webPath) }}\" width=\"50\" height=\"50\"></p>
        {% endif %}

        <a href=\"{{ path('homepage') }}\" class=\"waves-effect black white-text btn\">Back to home</a>

</div>
", "@FOSUser/Profile/show_content.html.twig", "/Applications/MAMP/htdocs/SnowTricks/src/UserBundle/Resources/views/Profile/show_content.html.twig");
    }
}
