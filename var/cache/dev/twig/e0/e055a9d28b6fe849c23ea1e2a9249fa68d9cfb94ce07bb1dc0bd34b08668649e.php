<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_997f77e03fc2bc125555a28974a455992b4d4eb288db324c03e3f8156baf19f5 extends Twig_Template
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
        $__internal_842252f46f92b636586b4fb2206d10056cd800351b21d027124f4c4983a457b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_842252f46f92b636586b4fb2206d10056cd800351b21d027124f4c4983a457b7->enter($__internal_842252f46f92b636586b4fb2206d10056cd800351b21d027124f4c4983a457b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_afde99e8637dfb3e7ed89228aaa4d36b7cc1cbb27a592b2c02d9e81c6d4e2bee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afde99e8637dfb3e7ed89228aaa4d36b7cc1cbb27a592b2c02d9e81c6d4e2bee->enter($__internal_afde99e8637dfb3e7ed89228aaa4d36b7cc1cbb27a592b2c02d9e81c6d4e2bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_842252f46f92b636586b4fb2206d10056cd800351b21d027124f4c4983a457b7->leave($__internal_842252f46f92b636586b4fb2206d10056cd800351b21d027124f4c4983a457b7_prof);

        
        $__internal_afde99e8637dfb3e7ed89228aaa4d36b7cc1cbb27a592b2c02d9e81c6d4e2bee->leave($__internal_afde99e8637dfb3e7ed89228aaa4d36b7cc1cbb27a592b2c02d9e81c6d4e2bee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
