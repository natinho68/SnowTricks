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
        $__internal_2d52ac0895bf1635d5c9b613907e9b05521bf7c8c0358a4bb10dc9228dfbac75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d52ac0895bf1635d5c9b613907e9b05521bf7c8c0358a4bb10dc9228dfbac75->enter($__internal_2d52ac0895bf1635d5c9b613907e9b05521bf7c8c0358a4bb10dc9228dfbac75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_34bf8e33a2c022108edc9b07689f197ffb608aad7ae8c54877d51093eb8dcb36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34bf8e33a2c022108edc9b07689f197ffb608aad7ae8c54877d51093eb8dcb36->enter($__internal_34bf8e33a2c022108edc9b07689f197ffb608aad7ae8c54877d51093eb8dcb36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_2d52ac0895bf1635d5c9b613907e9b05521bf7c8c0358a4bb10dc9228dfbac75->leave($__internal_2d52ac0895bf1635d5c9b613907e9b05521bf7c8c0358a4bb10dc9228dfbac75_prof);

        
        $__internal_34bf8e33a2c022108edc9b07689f197ffb608aad7ae8c54877d51093eb8dcb36->leave($__internal_34bf8e33a2c022108edc9b07689f197ffb608aad7ae8c54877d51093eb8dcb36_prof);

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
