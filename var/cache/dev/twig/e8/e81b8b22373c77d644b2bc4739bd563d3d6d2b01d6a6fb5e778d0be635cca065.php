<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_9c13e6317dbd1fece29cb113238f2f2e9bcbaf08252766ce5685b29ebfb500b2 extends Twig_Template
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
        $__internal_c5c22c962069a11bca491e6fbd015b43d6cc32a5a48ce3a302a15134231c9429 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5c22c962069a11bca491e6fbd015b43d6cc32a5a48ce3a302a15134231c9429->enter($__internal_c5c22c962069a11bca491e6fbd015b43d6cc32a5a48ce3a302a15134231c9429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_03144b49d31c073affa322bc6900aa8eb27bc4e254afa9e8b8169144d73eff30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03144b49d31c073affa322bc6900aa8eb27bc4e254afa9e8b8169144d73eff30->enter($__internal_03144b49d31c073affa322bc6900aa8eb27bc4e254afa9e8b8169144d73eff30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_c5c22c962069a11bca491e6fbd015b43d6cc32a5a48ce3a302a15134231c9429->leave($__internal_c5c22c962069a11bca491e6fbd015b43d6cc32a5a48ce3a302a15134231c9429_prof);

        
        $__internal_03144b49d31c073affa322bc6900aa8eb27bc4e254afa9e8b8169144d73eff30->leave($__internal_03144b49d31c073affa322bc6900aa8eb27bc4e254afa9e8b8169144d73eff30_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
