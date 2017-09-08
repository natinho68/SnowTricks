<?php

/* UserBundle:Security:login.html.twig */
class __TwigTemplate_06912c00904151cfb4b41746d2866eb98f51ac84266d274e8aa04e41631eb44b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "UserBundle:Security:login.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf3b3739a3876a51285be8101e1aabf473ffa9fc3efdcbe989e215be5afd153b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf3b3739a3876a51285be8101e1aabf473ffa9fc3efdcbe989e215be5afd153b->enter($__internal_cf3b3739a3876a51285be8101e1aabf473ffa9fc3efdcbe989e215be5afd153b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:login.html.twig"));

        $__internal_addbbf5324fd5e84bfbdf94408c2fc36c0514adadce833848e9c06c39ef31281 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_addbbf5324fd5e84bfbdf94408c2fc36c0514adadce833848e9c06c39ef31281->enter($__internal_addbbf5324fd5e84bfbdf94408c2fc36c0514adadce833848e9c06c39ef31281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf3b3739a3876a51285be8101e1aabf473ffa9fc3efdcbe989e215be5afd153b->leave($__internal_cf3b3739a3876a51285be8101e1aabf473ffa9fc3efdcbe989e215be5afd153b_prof);

        
        $__internal_addbbf5324fd5e84bfbdf94408c2fc36c0514adadce833848e9c06c39ef31281->leave($__internal_addbbf5324fd5e84bfbdf94408c2fc36c0514adadce833848e9c06c39ef31281_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_087a2e14a868a0f3c8872a51d52fbd3e46e0caf91866f0f5a8cc6d74102b4f8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_087a2e14a868a0f3c8872a51d52fbd3e46e0caf91866f0f5a8cc6d74102b4f8c->enter($__internal_087a2e14a868a0f3c8872a51d52fbd3e46e0caf91866f0f5a8cc6d74102b4f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0af6a19ad5bcdb872bfaf63ff06f3124893cb23c92357311bb5df6fb70e3d999 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0af6a19ad5bcdb872bfaf63ff06f3124893cb23c92357311bb5df6fb70e3d999->enter($__internal_0af6a19ad5bcdb872bfaf63ff06f3124893cb23c92357311bb5df6fb70e3d999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">

    ";
        // line 9
        echo "    ";
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 10
            echo "        <div class=\"row\" style=\"padding-top:15px;\">
            <div class=\"col s12 m10 l10 offset-m1 offset-l1\">
                <div class=\"chip black alert\">
                    <i class=\" close material-icons right white-text\">close</i>
                    <i class=\"material-icons white-text left\" style=\"padding-top: 2px;\">check_circle</i>
                    <h6 class=\"white-text\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</h6>
                </div>
            </div>
        </div>
    ";
        }
        // line 20
        echo "        <h3 style=\"margin-bottom:50px;\">Login</h3>

    ";
        // line 23
        echo "    <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
        <label for=\"username\">Login :</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

        <label for=\"password\">Password :</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />
        <br />
        <a href=\"#\" type=\"submit\" class=\"waves-effect black white-text btn\"><input type=\"submit\" value=\"Login\" /></a>
        <a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"waves-effect black btn\"><i class=\"material-icons left\">arrow_back</i>
            Back to home
        </a>

    </form>
    </div>

";
        
        $__internal_0af6a19ad5bcdb872bfaf63ff06f3124893cb23c92357311bb5df6fb70e3d999->leave($__internal_0af6a19ad5bcdb872bfaf63ff06f3124893cb23c92357311bb5df6fb70e3d999_prof);

        
        $__internal_087a2e14a868a0f3c8872a51d52fbd3e46e0caf91866f0f5a8cc6d74102b4f8c->leave($__internal_087a2e14a868a0f3c8872a51d52fbd3e46e0caf91866f0f5a8cc6d74102b4f8c_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 31,  81 => 25,  75 => 23,  71 => 20,  63 => 15,  56 => 10,  53 => 9,  49 => 6,  40 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/UserBundle/Resources/views/Security/login.html.twig #}

{% extends \"AppBundle::layout.html.twig\" %}

{% block body %}
    <div class=\"container\">

    {# S'il y a une erreur, on l'affiche dans un joli cadre #}
    {% if error %}
        <div class=\"row\" style=\"padding-top:15px;\">
            <div class=\"col s12 m10 l10 offset-m1 offset-l1\">
                <div class=\"chip black alert\">
                    <i class=\" close material-icons right white-text\">close</i>
                    <i class=\"material-icons white-text left\" style=\"padding-top: 2px;\">check_circle</i>
                    <h6 class=\"white-text\">{{ error.message }}</h6>
                </div>
            </div>
        </div>
    {% endif %}
        <h3 style=\"margin-bottom:50px;\">Login</h3>

    {# Le formulaire, avec URL de soumission vers la route « login_check » comme on l'a vu #}
    <form action=\"{{ path('fos_user_security_check') }}\" method=\"post\">
        <label for=\"username\">Login :</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

        <label for=\"password\">Password :</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />
        <br />
        <a href=\"#\" type=\"submit\" class=\"waves-effect black white-text btn\"><input type=\"submit\" value=\"Login\" /></a>
        <a href=\"{{ path('homepage') }}\" class=\"waves-effect black btn\"><i class=\"material-icons left\">arrow_back</i>
            Back to home
        </a>

    </form>
    </div>

{% endblock %}
", "UserBundle:Security:login.html.twig", "/Applications/MAMP/htdocs/SnowTricks/src/UserBundle/Resources/views/Security/login.html.twig");
    }
}
