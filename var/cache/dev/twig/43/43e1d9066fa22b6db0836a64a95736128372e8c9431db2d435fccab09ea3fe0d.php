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
        $__internal_0a065d3b75deb6f3bf3c7c07b5732f63b24ceb4c064f772c19aec10cf9a94133 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a065d3b75deb6f3bf3c7c07b5732f63b24ceb4c064f772c19aec10cf9a94133->enter($__internal_0a065d3b75deb6f3bf3c7c07b5732f63b24ceb4c064f772c19aec10cf9a94133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:show_content.html.twig"));

        $__internal_50c4d04ac2eb4739ac4cc65bb5985db0035b470915d68fd82dcd7856ecb96825 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50c4d04ac2eb4739ac4cc65bb5985db0035b470915d68fd82dcd7856ecb96825->enter($__internal_50c4d04ac2eb4739ac4cc65bb5985db0035b470915d68fd82dcd7856ecb96825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:show_content.html.twig"));

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
        
        $__internal_0a065d3b75deb6f3bf3c7c07b5732f63b24ceb4c064f772c19aec10cf9a94133->leave($__internal_0a065d3b75deb6f3bf3c7c07b5732f63b24ceb4c064f772c19aec10cf9a94133_prof);

        
        $__internal_50c4d04ac2eb4739ac4cc65bb5985db0035b470915d68fd82dcd7856ecb96825->leave($__internal_50c4d04ac2eb4739ac4cc65bb5985db0035b470915d68fd82dcd7856ecb96825_prof);

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
