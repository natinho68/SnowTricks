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
        $__internal_2c893bc754cec1a1f01e63c95c5db011b76b5d7331566bc4e42b945222ec491b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c893bc754cec1a1f01e63c95c5db011b76b5d7331566bc4e42b945222ec491b->enter($__internal_2c893bc754cec1a1f01e63c95c5db011b76b5d7331566bc4e42b945222ec491b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle::layout.html.twig"));

        $__internal_8298c35bbe9aff19d3c4d4c9966a7f456ef7f9ca29a241c20b099f7483b35a78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8298c35bbe9aff19d3c4d4c9966a7f456ef7f9ca29a241c20b099f7483b35a78->enter($__internal_8298c35bbe9aff19d3c4d4c9966a7f456ef7f9ca29a241c20b099f7483b35a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c893bc754cec1a1f01e63c95c5db011b76b5d7331566bc4e42b945222ec491b->leave($__internal_2c893bc754cec1a1f01e63c95c5db011b76b5d7331566bc4e42b945222ec491b_prof);

        
        $__internal_8298c35bbe9aff19d3c4d4c9966a7f456ef7f9ca29a241c20b099f7483b35a78->leave($__internal_8298c35bbe9aff19d3c4d4c9966a7f456ef7f9ca29a241c20b099f7483b35a78_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_41eb815b11012383bc96f740cf11a3114fadf2bc95ab1a1fa92fb642c1983578 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41eb815b11012383bc96f740cf11a3114fadf2bc95ab1a1fa92fb642c1983578->enter($__internal_41eb815b11012383bc96f740cf11a3114fadf2bc95ab1a1fa92fb642c1983578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1723a2ba8d35426032ab0c9d20e5207a420063777b940efbef520752888e3978 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1723a2ba8d35426032ab0c9d20e5207a420063777b940efbef520752888e3978->enter($__internal_1723a2ba8d35426032ab0c9d20e5207a420063777b940efbef520752888e3978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1723a2ba8d35426032ab0c9d20e5207a420063777b940efbef520752888e3978->leave($__internal_1723a2ba8d35426032ab0c9d20e5207a420063777b940efbef520752888e3978_prof);

        
        $__internal_41eb815b11012383bc96f740cf11a3114fadf2bc95ab1a1fa92fb642c1983578->leave($__internal_41eb815b11012383bc96f740cf11a3114fadf2bc95ab1a1fa92fb642c1983578_prof);

    }

    // line 24
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9351b28b23a666661eea633f2ebbc55a1017b2e5b8015c5a6d6eee393e2967ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9351b28b23a666661eea633f2ebbc55a1017b2e5b8015c5a6d6eee393e2967ef->enter($__internal_9351b28b23a666661eea633f2ebbc55a1017b2e5b8015c5a6d6eee393e2967ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_126f2135233d644200e34d926cedbdf2159f0516a43721f7e699ab3a171e212d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_126f2135233d644200e34d926cedbdf2159f0516a43721f7e699ab3a171e212d->enter($__internal_126f2135233d644200e34d926cedbdf2159f0516a43721f7e699ab3a171e212d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 25
        echo "    ";
        
        $__internal_126f2135233d644200e34d926cedbdf2159f0516a43721f7e699ab3a171e212d->leave($__internal_126f2135233d644200e34d926cedbdf2159f0516a43721f7e699ab3a171e212d_prof);

        
        $__internal_9351b28b23a666661eea633f2ebbc55a1017b2e5b8015c5a6d6eee393e2967ef->leave($__internal_9351b28b23a666661eea633f2ebbc55a1017b2e5b8015c5a6d6eee393e2967ef_prof);

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
