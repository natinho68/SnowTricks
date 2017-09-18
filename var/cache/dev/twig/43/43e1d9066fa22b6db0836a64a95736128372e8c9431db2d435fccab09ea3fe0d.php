<?php

/* UserBundle:Profile:show_content.html.twig */
class __TwigTemplate_a311d757d6c4cdc929cf6d2bfe90133e498508797de0632df6097767ca0ae10f extends Twig_Template
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
        $__internal_f8f9758f173d75fa4462f4b6a8ef5ec18f2f638390f7739a47f6edf44552ac81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8f9758f173d75fa4462f4b6a8ef5ec18f2f638390f7739a47f6edf44552ac81->enter($__internal_f8f9758f173d75fa4462f4b6a8ef5ec18f2f638390f7739a47f6edf44552ac81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:show_content.html.twig"));

        $__internal_a73a41df2176f6ae2e7643b1cf4d26871936d0edb4d6f285854cfb83687d91a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a73a41df2176f6ae2e7643b1cf4d26871936d0edb4d6f285854cfb83687d91a6->enter($__internal_a73a41df2176f6ae2e7643b1cf4d26871936d0edb4d6f285854cfb83687d91a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
    <h3>My profile</h3>
    <div class=\"fos_user_user_show\">
        <p><b>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</b>: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
        <p><b>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo "</b>: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
        ";
        // line 7
        if ((null === $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "profilePic", array()))) {
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "profilePic", array()), "webPath", array())), "html", null, true);
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
        
        $__internal_f8f9758f173d75fa4462f4b6a8ef5ec18f2f638390f7739a47f6edf44552ac81->leave($__internal_f8f9758f173d75fa4462f4b6a8ef5ec18f2f638390f7739a47f6edf44552ac81_prof);

        
        $__internal_a73a41df2176f6ae2e7643b1cf4d26871936d0edb4d6f285854cfb83687d91a6->leave($__internal_a73a41df2176f6ae2e7643b1cf4d26871936d0edb4d6f285854cfb83687d91a6_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Profile:show_content.html.twig";
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
", "UserBundle:Profile:show_content.html.twig", "/Applications/MAMP/htdocs/SnowTricks/src/UserBundle/Resources/views/Profile/show_content.html.twig");
    }
}
