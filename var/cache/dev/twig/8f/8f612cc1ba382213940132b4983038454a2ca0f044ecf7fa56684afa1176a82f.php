<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_60e0e966e0140078b587b8d51af5fb64f61ad224bc8c67eee154d7af1004ad25 extends Twig_Template
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
        $__internal_0b9e5b08cbdab1333c15410e1bea289193767e6c5e3857b71cdeef8998f40ff2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b9e5b08cbdab1333c15410e1bea289193767e6c5e3857b71cdeef8998f40ff2->enter($__internal_0b9e5b08cbdab1333c15410e1bea289193767e6c5e3857b71cdeef8998f40ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_2299159eb62a4516311df56cb4b219fd77014d5a21ebbe2f46d44370060c0c16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2299159eb62a4516311df56cb4b219fd77014d5a21ebbe2f46d44370060c0c16->enter($__internal_2299159eb62a4516311df56cb4b219fd77014d5a21ebbe2f46d44370060c0c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_0b9e5b08cbdab1333c15410e1bea289193767e6c5e3857b71cdeef8998f40ff2->leave($__internal_0b9e5b08cbdab1333c15410e1bea289193767e6c5e3857b71cdeef8998f40ff2_prof);

        
        $__internal_2299159eb62a4516311df56cb4b219fd77014d5a21ebbe2f46d44370060c0c16->leave($__internal_2299159eb62a4516311df56cb4b219fd77014d5a21ebbe2f46d44370060c0c16_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
