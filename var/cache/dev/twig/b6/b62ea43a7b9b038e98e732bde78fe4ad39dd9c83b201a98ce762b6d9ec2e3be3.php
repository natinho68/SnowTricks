<?php

/* UserBundle::layout.html.twig */
class __TwigTemplate_a6a48fa54d2a4c202f23a67bc5bb2f3293742d43aeefb5f2c0774c7ff2a12a57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "UserBundle::layout.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_259224d6860803c79ca61981715e4a9ba2de3a5693a951328c7748b395bc013e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_259224d6860803c79ca61981715e4a9ba2de3a5693a951328c7748b395bc013e->enter($__internal_259224d6860803c79ca61981715e4a9ba2de3a5693a951328c7748b395bc013e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle::layout.html.twig"));

        $__internal_be28fc63ba08c6ab2e2f2da2f2b69f991bd5dd0ae2fdc9558adaacb63891cd8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be28fc63ba08c6ab2e2f2da2f2b69f991bd5dd0ae2fdc9558adaacb63891cd8c->enter($__internal_be28fc63ba08c6ab2e2f2da2f2b69f991bd5dd0ae2fdc9558adaacb63891cd8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_259224d6860803c79ca61981715e4a9ba2de3a5693a951328c7748b395bc013e->leave($__internal_259224d6860803c79ca61981715e4a9ba2de3a5693a951328c7748b395bc013e_prof);

        
        $__internal_be28fc63ba08c6ab2e2f2da2f2b69f991bd5dd0ae2fdc9558adaacb63891cd8c->leave($__internal_be28fc63ba08c6ab2e2f2da2f2b69f991bd5dd0ae2fdc9558adaacb63891cd8c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_11ff7eb254508b710e30c4842be1eb1dbe768912456a4ced0c61aa8941233495 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11ff7eb254508b710e30c4842be1eb1dbe768912456a4ced0c61aa8941233495->enter($__internal_11ff7eb254508b710e30c4842be1eb1dbe768912456a4ced0c61aa8941233495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aa55f60d623b6f1254c054f165e361cf7ea123cd43a21e395105c72b9107f7af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa55f60d623b6f1254c054f165e361cf7ea123cd43a21e395105c72b9107f7af->enter($__internal_aa55f60d623b6f1254c054f165e361cf7ea123cd43a21e395105c72b9107f7af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 8
        echo "
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 10
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 11
                echo "            <div class=\"row\" style=\"padding-top:15px;\">
                <div class=\"col s12 m10 l10 offset-m1 offset-l1\">
                    <div class=\"chip black alert\">
                        <i class=\" close material-icons right white-text\">close</i>
                        <i class=\"material-icons white-text left\" style=\"padding-top: 2px;\">check_circle</i>
                        <h6 class=\"white-text\">";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "</h6>
                    </div>
                </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
    ";
        // line 24
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 26
        echo "
";
        
        $__internal_aa55f60d623b6f1254c054f165e361cf7ea123cd43a21e395105c72b9107f7af->leave($__internal_aa55f60d623b6f1254c054f165e361cf7ea123cd43a21e395105c72b9107f7af_prof);

        
        $__internal_11ff7eb254508b710e30c4842be1eb1dbe768912456a4ced0c61aa8941233495->leave($__internal_11ff7eb254508b710e30c4842be1eb1dbe768912456a4ced0c61aa8941233495_prof);

    }

    // line 24
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_63a28852d932d35071d7d7283c9764780548a472a69ca25a48a45de44bc414f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63a28852d932d35071d7d7283c9764780548a472a69ca25a48a45de44bc414f3->enter($__internal_63a28852d932d35071d7d7283c9764780548a472a69ca25a48a45de44bc414f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e307945d7c6044c70443c4b2ebb9646432407861fb04cbd78ed9a9ba0aca768f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e307945d7c6044c70443c4b2ebb9646432407861fb04cbd78ed9a9ba0aca768f->enter($__internal_e307945d7c6044c70443c4b2ebb9646432407861fb04cbd78ed9a9ba0aca768f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 25
        echo "    ";
        
        $__internal_e307945d7c6044c70443c4b2ebb9646432407861fb04cbd78ed9a9ba0aca768f->leave($__internal_e307945d7c6044c70443c4b2ebb9646432407861fb04cbd78ed9a9ba0aca768f_prof);

        
        $__internal_63a28852d932d35071d7d7283c9764780548a472a69ca25a48a45de44bc414f3->leave($__internal_63a28852d932d35071d7d7283c9764780548a472a69ca25a48a45de44bc414f3_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 25,  106 => 24,  95 => 26,  92 => 24,  89 => 22,  83 => 21,  72 => 16,  65 => 11,  60 => 10,  56 => 9,  53 => 8,  50 => 6,  41 => 5,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# On étend notre layout #}
{% extends \"AppBundle::layout.html.twig\" %}

{# Dans notre layout, il faut définir le block body #}
{% block body %}

    {# On affiche les messages flash que définissent les contrôleurs du bundle #}

    {% for key, messages in app.session.flashbag.all() %}
        {% for message in messages %}
            <div class=\"row\" style=\"padding-top:15px;\">
                <div class=\"col s12 m10 l10 offset-m1 offset-l1\">
                    <div class=\"chip black alert\">
                        <i class=\" close material-icons right white-text\">close</i>
                        <i class=\"material-icons white-text left\" style=\"padding-top: 2px;\">check_circle</i>
                        <h6 class=\"white-text\">{{ message|trans({}, 'FOSUserBundle') }}</h6>
                    </div>
                </div>
        </div>
        {% endfor %}
    {% endfor %}

    {# On définit ce block, dans lequel vont venir s'insérer les autres vues du bundle #}
    {% block fos_user_content %}
    {% endblock fos_user_content %}

{% endblock %}
", "UserBundle::layout.html.twig", "/Applications/MAMP/htdocs/SnowTricks/src/UserBundle/Resources/views/layout.html.twig");
    }
}
