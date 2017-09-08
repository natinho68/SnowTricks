<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_400d15b41439000176578df495ca475934aa75e428ebe1bf4a0f6eff84c2f06f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "@FOSUser/layout.html.twig", 2);
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
        $__internal_58d3aaa6f1051305d10acd8377ba608b50fab63e873c535636c441eb414a2a7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58d3aaa6f1051305d10acd8377ba608b50fab63e873c535636c441eb414a2a7d->enter($__internal_58d3aaa6f1051305d10acd8377ba608b50fab63e873c535636c441eb414a2a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_95d0193988162fc032dd6d0959eadada1b80b14487f1873ee9272c5493062f7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95d0193988162fc032dd6d0959eadada1b80b14487f1873ee9272c5493062f7a->enter($__internal_95d0193988162fc032dd6d0959eadada1b80b14487f1873ee9272c5493062f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58d3aaa6f1051305d10acd8377ba608b50fab63e873c535636c441eb414a2a7d->leave($__internal_58d3aaa6f1051305d10acd8377ba608b50fab63e873c535636c441eb414a2a7d_prof);

        
        $__internal_95d0193988162fc032dd6d0959eadada1b80b14487f1873ee9272c5493062f7a->leave($__internal_95d0193988162fc032dd6d0959eadada1b80b14487f1873ee9272c5493062f7a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_70cc18842413cfa4ea11a75546bd01b1efb3f25da1b83dbeccd333daf16fefb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70cc18842413cfa4ea11a75546bd01b1efb3f25da1b83dbeccd333daf16fefb7->enter($__internal_70cc18842413cfa4ea11a75546bd01b1efb3f25da1b83dbeccd333daf16fefb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0998b3457100aba9577c9ca811ac1c713f7baaac794a63a17b9e80cda89b2709 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0998b3457100aba9577c9ca811ac1c713f7baaac794a63a17b9e80cda89b2709->enter($__internal_0998b3457100aba9577c9ca811ac1c713f7baaac794a63a17b9e80cda89b2709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 8
        echo "
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
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
        
        $__internal_0998b3457100aba9577c9ca811ac1c713f7baaac794a63a17b9e80cda89b2709->leave($__internal_0998b3457100aba9577c9ca811ac1c713f7baaac794a63a17b9e80cda89b2709_prof);

        
        $__internal_70cc18842413cfa4ea11a75546bd01b1efb3f25da1b83dbeccd333daf16fefb7->leave($__internal_70cc18842413cfa4ea11a75546bd01b1efb3f25da1b83dbeccd333daf16fefb7_prof);

    }

    // line 24
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_14e997627c0f72808e9daa65a026f02bf6701cd1d6933a81c730d9a1730e0621 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14e997627c0f72808e9daa65a026f02bf6701cd1d6933a81c730d9a1730e0621->enter($__internal_14e997627c0f72808e9daa65a026f02bf6701cd1d6933a81c730d9a1730e0621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d8be029c2b876ef7a0354d7b2412559557b6bb92db371120853e5248222e727f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8be029c2b876ef7a0354d7b2412559557b6bb92db371120853e5248222e727f->enter($__internal_d8be029c2b876ef7a0354d7b2412559557b6bb92db371120853e5248222e727f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 25
        echo "    ";
        
        $__internal_d8be029c2b876ef7a0354d7b2412559557b6bb92db371120853e5248222e727f->leave($__internal_d8be029c2b876ef7a0354d7b2412559557b6bb92db371120853e5248222e727f_prof);

        
        $__internal_14e997627c0f72808e9daa65a026f02bf6701cd1d6933a81c730d9a1730e0621->leave($__internal_14e997627c0f72808e9daa65a026f02bf6701cd1d6933a81c730d9a1730e0621_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
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
", "@FOSUser/layout.html.twig", "/Applications/MAMP/htdocs/SnowTricks/src/UserBundle/Resources/views/layout.html.twig");
    }
}
