<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_7b2ea3f31d7fd06dd70c874c1abf78ad546791da5d4935f84563f9dac52490e5 extends Twig_Template
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
        $__internal_66da33f6250faa2d225701775f906dcdf1e13935a2b45eae280502825e03c677 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66da33f6250faa2d225701775f906dcdf1e13935a2b45eae280502825e03c677->enter($__internal_66da33f6250faa2d225701775f906dcdf1e13935a2b45eae280502825e03c677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_53c9d7a779e901f410deb22eb5c89ae77b890f047070e02a84fc1a891433692a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53c9d7a779e901f410deb22eb5c89ae77b890f047070e02a84fc1a891433692a->enter($__internal_53c9d7a779e901f410deb22eb5c89ae77b890f047070e02a84fc1a891433692a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_66da33f6250faa2d225701775f906dcdf1e13935a2b45eae280502825e03c677->leave($__internal_66da33f6250faa2d225701775f906dcdf1e13935a2b45eae280502825e03c677_prof);

        
        $__internal_53c9d7a779e901f410deb22eb5c89ae77b890f047070e02a84fc1a891433692a->leave($__internal_53c9d7a779e901f410deb22eb5c89ae77b890f047070e02a84fc1a891433692a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
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
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_label.html.php");
    }
}
