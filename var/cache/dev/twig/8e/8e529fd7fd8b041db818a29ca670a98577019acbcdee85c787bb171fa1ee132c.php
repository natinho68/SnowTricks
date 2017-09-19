<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_eb6671fd161dda1e2ada626f4ea4641e222ea370ced56298a81af7ff993518dc extends Twig_Template
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
        $__internal_e41258229129e275e3392bc0cc5317bb2c86b81b6f2bfec4df4acd2f714a0a28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e41258229129e275e3392bc0cc5317bb2c86b81b6f2bfec4df4acd2f714a0a28->enter($__internal_e41258229129e275e3392bc0cc5317bb2c86b81b6f2bfec4df4acd2f714a0a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_7050d83e66309c0e7eb6b87cf9a92f5147e5b493f48bc8276ad60bfff474c63f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7050d83e66309c0e7eb6b87cf9a92f5147e5b493f48bc8276ad60bfff474c63f->enter($__internal_7050d83e66309c0e7eb6b87cf9a92f5147e5b493f48bc8276ad60bfff474c63f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_e41258229129e275e3392bc0cc5317bb2c86b81b6f2bfec4df4acd2f714a0a28->leave($__internal_e41258229129e275e3392bc0cc5317bb2c86b81b6f2bfec4df4acd2f714a0a28_prof);

        
        $__internal_7050d83e66309c0e7eb6b87cf9a92f5147e5b493f48bc8276ad60bfff474c63f->leave($__internal_7050d83e66309c0e7eb6b87cf9a92f5147e5b493f48bc8276ad60bfff474c63f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
