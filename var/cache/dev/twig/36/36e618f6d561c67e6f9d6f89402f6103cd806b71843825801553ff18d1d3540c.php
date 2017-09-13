<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_27a3f392007cb87deb163129ba6cca9b35a91e681c4ba2b2fd87bf5359d2e89e extends Twig_Template
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
        $__internal_d58548743745876469b84f2738284423cfdf8866d2c6d0d15c4b3d47257c45d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d58548743745876469b84f2738284423cfdf8866d2c6d0d15c4b3d47257c45d7->enter($__internal_d58548743745876469b84f2738284423cfdf8866d2c6d0d15c4b3d47257c45d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_feaefd2127f81ad23d0113d373ac44c154a5a90f2fc953c2889ec93930874ea5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feaefd2127f81ad23d0113d373ac44c154a5a90f2fc953c2889ec93930874ea5->enter($__internal_feaefd2127f81ad23d0113d373ac44c154a5a90f2fc953c2889ec93930874ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_d58548743745876469b84f2738284423cfdf8866d2c6d0d15c4b3d47257c45d7->leave($__internal_d58548743745876469b84f2738284423cfdf8866d2c6d0d15c4b3d47257c45d7_prof);

        
        $__internal_feaefd2127f81ad23d0113d373ac44c154a5a90f2fc953c2889ec93930874ea5->leave($__internal_feaefd2127f81ad23d0113d373ac44c154a5a90f2fc953c2889ec93930874ea5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
